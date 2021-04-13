<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <style>            body { background-color: #F9F9F9; color: #222; font: 14px/1.4 Helvetica, Arial, sans-serif; margin: 0; padding-bottom: 45px; }

            a { cursor: pointer; text-decoration: none; }
            a:hover { text-decoration: underline; }
            abbr[title] { border-bottom: none; cursor: help; text-decoration: none; }

            code, pre { font: 13px/1.5 Consolas, Monaco, Menlo, "Ubuntu Mono", "Liberation Mono", monospace; }

            table, tr, th, td { background: #FFF; border-collapse: collapse; vertical-align: top; }
            table { background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; width: 100%; }
            table th, table td { border: solid #E0E0E0; border-width: 1px 0; padding: 8px 10px; }
            table th { background-color: #E0E0E0; font-weight: bold; text-align: left; }

            .hidden-xs-down { display: none; }
            .block { display: block; }
            .break-long-words { -ms-word-break: break-all; word-break: break-all; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; }
            .text-muted { color: #999; }

            .container { max-width: 1024px; margin: 0 auto; padding: 0 15px; }
            .container::after { content: ""; display: table; clear: both; }

            .exception-summary { background: #B0413E; border-bottom: 2px solid rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, .3); flex: 0 0 auto; margin-bottom: 30px; }

            .exception-message-wrapper { display: flex; align-items: center; min-height: 70px; }
            .exception-message { flex-grow: 1; padding: 30px 0; }
            .exception-message, .exception-message a { color: #FFF; font-size: 21px; font-weight: 400; margin: 0; }
            .exception-message.long { font-size: 18px; }
            .exception-message a { border-bottom: 1px solid rgba(255, 255, 255, 0.5); font-size: inherit; text-decoration: none; }
            .exception-message a:hover { border-bottom-color: #ffffff; }

            .exception-illustration { flex-basis: 111px; flex-shrink: 0; height: 66px; margin-left: 15px; opacity: .7; }

            .trace + .trace { margin-top: 30px; }
            .trace-head .trace-class { color: #222; font-size: 18px; font-weight: bold; line-height: 1.3; margin: 0; position: relative; }

            .trace-message { font-size: 14px; font-weight: normal; margin: .5em 0 0; }

            .trace-file-path, .trace-file-path a { color: #222; margin-top: 3px; font-size: 13px; }
            .trace-class { color: #B0413E; }
            .trace-type { padding: 0 2px; }
            .trace-method { color: #B0413E; font-weight: bold; }
            .trace-arguments { color: #777; font-weight: normal; padding-left: 2px; }

            @media (min-width: 575px) {
                .hidden-xs-down { display: initial; }
            }</style>
    </head>
    <body>
                    <div class="exception-summary">
                <div class="container">
                    <div class="exception-message-wrapper">
                        <h1 class="break-long-words exception-message">Whoops, looks like something went wrong.</h1>
                        <div class="exception-illustration hidden-xs-down"><svg viewBox="0 0 136 81" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.4"><path d="M92.4 20.4a23.2 23.2 0 0 1 9 1.9 23.7 23.7 0 0 1 5.2 3 24.3 24.3 0 0 1 3.4 3.4 24.8 24.8 0 0 1 5 9.4c.5 1.7.8 3.4 1 5.2v14.5h.4l.5.2a7.4 7.4 0 0 0 2.5.2l.2-.2.6-.8.8-1.3-.2-.1a5.5 5.5 0 0 1-.8-.3 5.6 5.6 0 0 1-2.3-1.8 5.7 5.7 0 0 1-.9-1.6 6.5 6.5 0 0 1-.2-2.8 7.3 7.3 0 0 1 .5-2l.3-.3.8-.9.3-.3c.2-.2.5-.3.8-.3H120.7c.2 0 .3-.1.4 0h.4l.2.1.3.2.2-.4.3-.4.1-.1 1.2-1 .3-.2.4-.1.4-.1h.3l1.5.1.4.1.8.5.1.2 1 1.1v.2H129.4l.4-.2 1.4-.5h1.1c.3 0 .7.2 1 .4.2 0 .3.2.5.3l.2.2.5.3.4.6.1.3.4 1.4.1.4v.6a7.8 7.8 0 0 1-.1.6 9.9 9.9 0 0 1-.8 2.4 7.8 7.8 0 0 1-3 3.3 6.4 6.4 0 0 1-1 .5 6.1 6.1 0 0 1-.6.2l-.7.1h-.1a23.4 23.4 0 0 1-.2 1.7 14.3 14.3 0 0 1-.6 2.1l-.8 2a9.2 9.2 0 0 1-.4.6l-.7 1a9.1 9.1 0 0 1-2.3 2.2c-.9.5-2 .6-3 .7l-1.4.1h-.5l-.4.1a15.8 15.8 0 0 1-2.8-.1v4.2a9.7 9.7 0 0 1-.7 3.5 9.6 9.6 0 0 1-1.7 2.8 9.3 9.3 0 0 1-3 2.3 9 9 0 0 1-5.4.7 9 9 0 0 1-3-1 9.4 9.4 0 0 1-2.7-2.5 10 10 0 0 1-1 1.2 9.3 9.3 0 0 1-2 1.3 9 9 0 0 1-2.4 1 9 9 0 0 1-6.5-1.1A9.4 9.4 0 0 1 85 77V77a10.9 10.9 0 0 1-.6.6 9.3 9.3 0 0 1-2.7 2 9 9 0 0 1-6 .8 9 9 0 0 1-2.4-1 9.3 9.3 0 0 1-2.3-1.7 9.6 9.6 0 0 1-1.8-2.8 9.7 9.7 0 0 1-.8-3.7v-4a18.5 18.5 0 0 1-2.9.2l-1.2-.1c-1.9-.3-3.7-1-5.1-2.1A8.2 8.2 0 0 1 58 64a10.2 10.2 0 0 1-.9-1.2 15.3 15.3 0 0 1-.7-1.3 20.8 20.8 0 0 1-1.9-6.2v-.2a6.5 6.5 0 0 1-1-.3 6.1 6.1 0 0 1-.6-.3 6.6 6.6 0 0 1-.9-.5 8.2 8.2 0 0 1-2.7-3.8 10 10 0 0 1-.3-1 10.3 10.3 0 0 1-.3-1.9V47v-.4l.1-.4.6-1.4.1-.2a2 2 0 0 1 .8-.8l.3-.2.3-.2a3.2 3.2 0 0 1 1.8-.5h.4l.3.2 1.4.6.2.2.4.3.3.4.7-.7.2-.2.4-.2.6-.2h2.1l.4.2.4.2.3.2.8 1 .2-.1h.1v-.1H63l1.1.1h.3l.8.5.3.4.7 1 .2.3.1.5a11 11 0 0 1 .2 1.5c0 .8 0 1.6-.3 2.3a6 6 0 0 1-.5 1.2 5.5 5.5 0 0 1-3.3 2.5 12.3 12.3 0 0 0 1.4 3h.1l.2.1 1 .2h1.5l.5-.2H67.8l.5-.2h.1V44v-.4a26.7 26.7 0 0 1 .3-2.3 24.7 24.7 0 0 1 5.7-12.5 24.2 24.2 0 0 1 3.5-3.3 23.7 23.7 0 0 1 4.9-3 23.2 23.2 0 0 1 5.6-1.7 23.7 23.7 0 0 1 4-.3zm-.3 2a21.2 21.2 0 0 0-8 1.7 21.6 21.6 0 0 0-4.8 2.7 22.2 22.2 0 0 0-3.2 3 22.7 22.7 0 0 0-5 9.2 23.4 23.4 0 0 0-.7 4.9v15.7l-.5.1a34.3 34.3 0 0 1-1.5.3h-.2l-.4.1h-.4l-.9.2a10 10 0 0 1-1.9 0c-.5 0-1-.2-1.5-.4a1.8 1.8 0 0 1-.3-.2 2 2 0 0 1-.3-.3 5.2 5.2 0 0 1-.1-.2 9 9 0 0 1-.6-.9 13.8 13.8 0 0 1-1-2 14.3 14.3 0 0 1-.6-2 14 14 0 0 1-.1-.8v-.2h.3a12.8 12.8 0 0 0 1.4-.2 4.4 4.4 0 0 0 .3 0 3.6 3.6 0 0 0 1.1-.7 3.4 3.4 0 0 0 1.2-1.7l.2-1.2a5.1 5.1 0 0 0 0-.8 7.2 7.2 0 0 0-.1-.8l-.7-1-1.2-.2-1 .7-.1 1.3a5 5 0 0 1 .1.4v.6a1 1 0 0 1 0 .3c-.1.3-.4.4-.7.5l-1.2.4v-.7A9.9 9.9 0 0 1 60 49l.3-.6v-.2l.1-.1v-1.6l-1-1.2h-1.5l-1 1.1v.4a5.3 5.3 0 0 0-.2.6 5.5 5.5 0 0 0 0 .5c0 .7 0 1.4.3 2 0 .4.2.8.4 1.2L57 51a9.5 9.5 0 0 1-1.1-.5h-.2a2 2 0 0 1-.4-.3c-.4-.4-.5-1-.6-1.6a5.6 5.6 0 0 1 0-.5v-.5-.5l-.6-1.5-1.4-.6-.9.3s-.2 0-.3.2a2 2 0 0 1-.1 0l-.6 1.4v.7a8.5 8.5 0 0 0 .5 2c.4 1.1 1 2.1 2 2.8a4.7 4.7 0 0 0 2.1.9h1a22.8 22.8 0 0 0 .1 1 18.1 18.1 0 0 0 .8 3.8 18.2 18.2 0 0 0 1.6 3.7l1 1.3c1 1 2.3 1.6 3.7 2a11.7 11.7 0 0 0 4.8 0h.4l.5-.2.5-.1.6-.2v6.6a8 8 0 0 0 .1 1.3 7.5 7.5 0 0 0 2.4 4.3 7.2 7.2 0 0 0 2.3 1.3 7 7 0 0 0 7-1.1 7.5 7.5 0 0 0 2-2.6A7.7 7.7 0 0 0 85 72V71a8.2 8.2 0 0 0 .2 1.3c0 .7.3 1.4.6 2a7.5 7.5 0 0 0 1.7 2.3 7.3 7.3 0 0 0 2.2 1.4 7.1 7.1 0 0 0 4.6.2 7.2 7.2 0 0 0 2.4-1.2 7.5 7.5 0 0 0 2.1-2.7 7.8 7.8 0 0 0 .7-2.4V71a9.3 9.3 0 0 0 .1.6 7.6 7.6 0 0 0 .6 2.5 7.5 7.5 0 0 0 2.4 3 7.1 7.1 0 0 0 7 .8 7.3 7.3 0 0 0 2.3-1.5 7.5 7.5 0 0 0 1.6-2.3 7.6 7.6 0 0 0 .5-2l.1-1.1v-6.7l.4.1a12.2 12.2 0 0 0 2 .5 11.1 11.1 0 0 0 2.5 0h.8l1.2-.1a9.5 9.5 0 0 0 1.4-.2l.9-.3a3.5 3.5 0 0 0 .6-.4l1.2-1.4a12.2 12.2 0 0 0 .8-1.2c0-.3.2-.5.3-.7a15.9 15.9 0 0 0 .7-2l.3-1.6v-1.3l.2-.9V54.6a15.5 15.5 0 0 0 1.8 0 4.5 4.5 0 0 0 1.4-.5 5.7 5.7 0 0 0 2.5-3.2 7.6 7.6 0 0 0 .4-1.5v-.3l-.4-1.4a5.2 5.2 0 0 1-.2-.1l-.4-.4a3.8 3.8 0 0 0-.2 0 1.4 1.4 0 0 0-.5-.2l-1.4.4-.7 1.3v.7a5.7 5.7 0 0 1-.1.8l-.7 1.4a1.9 1.9 0 0 1-.5.3h-.3a9.6 9.6 0 0 1-.8.3 8.8 8.8 0 0 1-.6 0l.2-.4.2-.5.2-.3v-.4l.1-.2V50l.1-1 .1-.6v-.6a4.8 4.8 0 0 0 0-.8v-.2l-1-1.1-1.5-.2-1.1 1-.2 1.4v.1l.2.4.2.3v.4l.1 1.1v.3l.1.5v.8a9.6 9.6 0 0 1-.8-.3l-.2-.1h-.3l-.8-.1h-.2a1.6 1.6 0 0 1-.2-.2.9.9 0 0 1-.2-.2 1 1 0 0 1-.1-.5l.2-.9v-1.2l-.9-.8h-1.2l-.8.9v.3a4.8 4.8 0 0 0-.3 2l.3.9a3.5 3.5 0 0 0 1.2 1.6l1 .5.8.2 1.4.1h.4l.2.1a12.1 12.1 0 0 1-1 2.6 13.2 13.2 0 0 1-.8 1.5 9.5 9.5 0 0 1-1 1.2l-.2.3a1.7 1.7 0 0 1-.4.3 2.4 2.4 0 0 1-.7.2h-2.5a7.8 7.8 0 0 1-.6-.2l-.7-.2h-.2a14.8 14.8 0 0 1-.6-.2 23.4 23.4 0 0 1-.4-.1l-.4-.1-.3-.1V43.9a34.6 34.6 0 0 0 0-.6 23.6 23.6 0 0 0-.4-3 22.7 22.7 0 0 0-1.5-4.7 22.6 22.6 0 0 0-4.6-6.7 21.9 21.9 0 0 0-6.9-4.7 21.2 21.2 0 0 0-8.1-1.8H92zm9.1 33.7l.3.1a1 1 0 0 1 .6.8v.4a8.4 8.4 0 0 1 0 .5 8.8 8.8 0 0 1-1.6 4.2l-1 1.3A10 10 0 0 1 95 66c-1.3.3-2.7.4-4 .3a10.4 10.4 0 0 1-2.7-.8 10 10 0 0 1-3.6-2.5 9.3 9.3 0 0 1-.8-1 9 9 0 0 1-.7-1.2 8.6 8.6 0 0 1-.8-3.4V57a1 1 0 0 1 .3-.6 1 1 0 0 1 1.3-.2 1 1 0 0 1 .4.8v.4a6.5 6.5 0 0 0 .5 2.2 7 7 0 0 0 2.1 2.8l1 .6c2.6 1.6 6 1.6 8.5 0a8 8 0 0 0 1.1-.6 7.6 7.6 0 0 0 1.2-1.2 7 7 0 0 0 1-1.7 6.5 6.5 0 0 0 .4-2.5 1 1 0 0 1 .7-1h.4zM30.7 43.7c-15.5 1-28.5-6-30.1-16.4C-1.2 15.7 11.6 4 29 1.3 46.6-1.7 62.3 5.5 64 17.1c1.6 10.4-8.7 21-23.7 25a31.2 31.2 0 0 0 0 .9v.3a19 19 0 0 0 .1 1l.1.4.1.9a4.7 4.7 0 0 0 .5 1l.7 1a9.2 9.2 0 0 0 1.2 1l1.5.8.6.8-.7.6-1.1.3a11.2 11.2 0 0 1-2.6.4 8.6 8.6 0 0 1-3-.5 8.5 8.5 0 0 1-1-.4 11.2 11.2 0 0 1-1.8-1.2 13.3 13.3 0 0 1-1-1 18 18 0 0 1-.7-.6l-.4-.4a23.4 23.4 0 0 1-1.3-1.8l-.1-.1-.3-.5V45l-.3-.6v-.7zM83.1 36c3.6 0 6.5 3.2 6.5 7.1 0 4-3 7.2-6.5 7.2S76.7 47 76.7 43 79.6 36 83 36zm18 0c3.6 0 6.5 3.2 6.5 7.1 0 4-2.9 7.2-6.4 7.2S94.7 47 94.7 43s3-7.1 6.5-7.1zm-18 6.1c2 0 3.5 1.6 3.5 3.6S85 49.2 83 49.2s-3.4-1.6-3.4-3.6S81.2 42 83 42zm17.9 0c1.9 0 3.4 1.6 3.4 3.6s-1.5 3.6-3.4 3.6c-2 0-3.5-1.6-3.5-3.6S99.1 42 101 42zM17 28c-.3 1.6-1.8 5-5.2 5.8-2.5.6-4.1-.8-4.5-2.6-.4-1.9.7-3.5 2.1-4.5A3.5 3.5 0 0 1 8 24.6c-.4-2 .8-3.7 3.2-4.2 1.9-.5 3.1.2 3.4 1.5.3 1.1-.5 2.2-1.8 2.5-.9.3-1.6 0-1.7-.6a1.4 1.4 0 0 1 0-.7s.3.2 1 0c.7-.1 1-.7.9-1.2-.2-.6-1-.8-1.8-.6-1 .2-2 1-1.7 2.6.3 1 .9 1.6 1.5 1.8l.7-.2c1-.2 1.5 0 1.6.5 0 .4-.2 1-1.2 1.2a3.3 3.3 0 0 1-1.5 0c-.9.7-1.6 1.9-1.3 3.2.3 1.3 1.3 2.2 3 1.8 2.5-.7 3.8-3.7 4.2-5-.3-.5-.6-1-.7-1.6-.1-.5.1-1 .9-1.2.4 0 .7.2.8.8a2.8 2.8 0 0 1 0 1l.7 1c.6-2 1.4-4 1.7-4 .6-.2 1.5.6 1.5.6-.8.7-1.7 2.4-2.3 4.2.8.6 1.6 1 2.1 1 .5-.1.8-.6 1-1.2-.3-2.2 1-4.3 2.3-4.6.7-.2 1.3.2 1.4.8.1.5 0 1.3-.9 1.7-.2-1-.6-1.3-1-1.3-.4.1-.7 1.4-.4 2.8.2 1 .7 1.5 1.3 1.4.8-.2 1.3-1.2 1.7-2.1-.3-2.1.9-4.2 2.2-4.5.7-.2 1.2.1 1.4 1 .4 1.4-1 2.8-2.2 3.4.3.7.7 1 1.3.9 1-.3 1.6-1.5 2-2.5l-.5-3v-.3s1.6-.3 1.8.6v.1c.2-.6.7-1.2 1.3-1.4.8-.1 1.5.6 1.7 1.6.5 2.2-.5 4.4-1.8 4.7H33a31.9 31.9 0 0 0 1 5.2c-.4.1-1.8.4-2-.4l-.5-5.6c-.5 1-1.3 2.2-2.5 2.4-1 .3-1.6-.3-2-1.1-.5 1-1.3 2.1-2.4 2.4-.8.2-1.5-.1-2-1-.3.8-.9 1.5-1.5 1.7-.7.1-1.5-.3-2.4-1-.3.8-.4 1.6-.4 2.2 0 0-.7 0-.8-.4-.1-.5 0-1.5.3-2.7a10.3 10.3 0 0 1-.7-.8zm38.2-17.8l.2.9c.5 1.9.4 4.4.8 6.4 0 .6-.4 3-1.4 3.3-.2 0-.3 0-.4-.4-.1-.7 0-1.6-.3-2.6-.2-1.1-.8-1.6-1.5-1.5-.8.2-1.3 1-1.6 2l-.1-.5c-.2-1-1.8-.6-1.8-.6a6.2 6.2 0 0 1 .4 1.3l.2 1c-.2.5-.6 1-1.2 1l-.2.1a7 7 0 0 0-.1-.8c-.3-1.1-1-2-1.6-1.8a.7.7 0 0 0-.4.3c-1.3.3-2.4 2-2.1 3.9-.2.9-.6 1.7-1 1.9-.5 0-.8-.5-1.1-1.8l-.1-1.2a4 4 0 0 0 0-1.7c0-.4-.4-.7-.8-.6-.7.2-.9 1.7-.5 3.8-.2 1-.6 2-1.3 2-.4.2-.8-.2-1-1l-.2-3c1.2-.5 2-1 1.8-1.7-.1-.5-.8-.7-.8-.7s0 .7-1 1.2l-.2-1.4c-.1-.6-.4-1-1.7-.6l.4 1 .2 1.5h-1v.8c0 .3.4.3 1 .2 0 1.3 0 2.7.2 3.6.3 1.4 1.2 2 2 1.7 1-.2 1.6-1.3 2-2.3.3 1.2 1 2 1.9 1.7.7-.2 1.2-1.1 1.6-2.2.4.8 1.1 1.1 2 1 1.2-.4 1.7-1.6 1.8-2.8h.2c.6-.2 1-.6 1.3-1 0 .8 0 1.5.2 2.1.1.5.3.7.6.6.5-.1 1-.9 1-.9a4 4 0 0 1-.3-1c-.3-1.3.3-3.6 1-3.7.2 0 .3.2.5.7v.8l.2 1.5v.7c.2.7.7 1.3 1.5 1 1.3-.2 2-2.6 2.1-3.9.3.2.6.2 1 .1-.6-2.2 0-6.1-.3-7.9-.1-.4-1-.5-1.7-.5h-.4zm-21.5 12c.4 0 .7.3 1 1.1.2 1.3-.3 2.6-.9 2.8-.2 0-.7 0-1-1.2v-.4c0-1.3.4-2 1-2.2zm-5.2 1c.3 0 .6.2.6.5.2.6-.3 1.3-1.2 2-.3-1.4.1-2.3.6-2.5zm18-.4c-.5.2-1-.4-1.2-1.2-.2-1 0-2.1.7-2.5v.5c.2.7.6 1.5 1.3 1.9 0 .7-.2 1.2-.7 1.3zm10-1.6c0 .5.4.7 1 .6.8-.2 1-1 .8-1.6 0-.5-.4-1-1-.8-.5.1-1 .9-.8 1.8zm-14.3-5.5c0-.4-.5-.7-1-.5-.8.2-1 1-.9 1.5.2.6.5 1 1 .8.5 0 1.1-1 1-1.8z" fill="#fff" fill-opacity=".6"/></svg></div>
                    </div>
                </div>
            </div>

            <div class="container">
                                    <div class="trace trace-as-html">
                        <table class="trace-details">
                            <thead class="trace-head"><tr><th>
                                <h3 class="trace-class">
                                    <span class="text-muted">(1/1)</span>
                                    <span class="exception_title"><abbr title="Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException">MethodNotAllowedHttpException</abbr></span>
                                </h3>
                                <p class="break-long-words trace-message"></p>
                            </th></tr></thead>
                            <tbody><tr><td><span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/RouteCollection.php line 251"><strong>RouteCollection.php</strong> line 251</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\RouteCollection">RouteCollection</abbr></span><span class="trace-type">-></span><span class="trace-method">methodNotAllowed</span>(<span class="trace-arguments"><em>array</em>('GET', 'HEAD')</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/RouteCollection.php line 238"><strong>RouteCollection.php</strong> line 238</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\RouteCollection">RouteCollection</abbr></span><span class="trace-type">-></span><span class="trace-method">getRouteForMethods</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>array</em>('GET', 'HEAD')</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/RouteCollection.php line 176"><strong>RouteCollection.php</strong> line 176</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\RouteCollection">RouteCollection</abbr></span><span class="trace-type">-></span><span class="trace-method">match</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Router.php line 546"><strong>Router.php</strong> line 546</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Router">Router</abbr></span><span class="trace-type">-></span><span class="trace-method">findRoute</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Router.php line 525"><strong>Router.php</strong> line 525</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Router">Router</abbr></span><span class="trace-type">-></span><span class="trace-method">dispatchToRoute</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Router.php line 511"><strong>Router.php</strong> line 511</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Router">Router</abbr></span><span class="trace-type">-></span><span class="trace-method">dispatch</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php line 176"><strong>Kernel.php</strong> line 176</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Foundation\Http\Kernel">Kernel</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Foundation\Http\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 30"><strong>Pipeline.php</strong> line 30</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Routing\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php line 30"><strong>TransformsRequest.php</strong> line 30</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Foundation\Http\Middleware\TransformsRequest">TransformsRequest</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 148"><strong>Pipeline.php</strong> line 148</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Pipeline\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 53"><strong>Pipeline.php</strong> line 53</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Routing\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php line 30"><strong>TransformsRequest.php</strong> line 30</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Foundation\Http\Middleware\TransformsRequest">TransformsRequest</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 148"><strong>Pipeline.php</strong> line 148</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Pipeline\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 53"><strong>Pipeline.php</strong> line 53</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Routing\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php line 27"><strong>ValidatePostSize.php</strong> line 27</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Foundation\Http\Middleware\ValidatePostSize">ValidatePostSize</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 148"><strong>Pipeline.php</strong> line 148</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Pipeline\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 53"><strong>Pipeline.php</strong> line 53</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Routing\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php line 46"><strong>CheckForMaintenanceMode.php</strong> line 46</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode">CheckForMaintenanceMode</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 148"><strong>Pipeline.php</strong> line 148</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Pipeline\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php line 53"><strong>Pipeline.php</strong> line 53</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Routing\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Routing\{closure}</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php line 102"><strong>Pipeline.php</strong> line 102</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr></span><span class="trace-type">-></span><span class="trace-method">then</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Closure">Closure</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php line 151"><strong>Kernel.php</strong> line 151</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Foundation\Http\Kernel">Kernel</abbr></span><span class="trace-type">-></span><span class="trace-method">sendRequestThroughRouter</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/angger/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php line 116"><strong>Kernel.php</strong> line 116</span></span></td></tr>
<tr><td>at <span class="trace-class"><abbr title="Illuminate\Foundation\Http\Kernel">Kernel</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span>(<span class="trace-arguments"><em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)</span>)<span class="block trace-file-path">in <span title="/storage/ssd5/696/16553696/public_html/index.php line 56"><strong>index.php</strong> line 56</span></span></td></tr>
</tbody>
</table>
</div>

            </div>
    <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Go for it</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday Prices",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Get 90% Off!",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Get Web Hosting for $0.99/month + SSL Certificate for FREE!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>
</html>