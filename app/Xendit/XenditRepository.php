<?php

namespace App\Xendit;

use Carbon\Carbon;
use App\Doku\Myshortcart;

class XenditRepository
{
    public function storeDataToMyshortcartTable($transactionType, $invoiceId, $externalId, $status, $amount, $trxType)
    {
        try {
            $result = ['status' => false, 'message' => ''];
            $myShortCart = new Myshortcart();

            if ($transactionType == 'BSM') {
                $myShortCart->org_registration_id = $invoiceId;
            }
            $myShortCart->transidmerchant = $externalId;
            $myShortCart->trxstatus       = $status;
            $myShortCart->totalamount     = $amount;
            $myShortCart->trxtype         = $trxType;
            $myShortCart->starttime       = Carbon::now()->setTimezone('Asia/Jakarta');
            $myShortCart->save();
            $result['message'] = 'Data Saved';
            $result['status'] = true;
            return $result;
        } catch (\Exception $e) {
            $result['message'] = 'Something wrong ' . $e->getMessage();
            return $result;
        }
    }
}