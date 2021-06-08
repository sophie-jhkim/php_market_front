<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="/css/auth/login.css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/636dff72e8.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="/js/auth/login.js"></script>
    </head>
    <body>

        <div id="login_wrap">

            <auth-session-status class="mb-4" :status="session('status')"/>
{{--             <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

            <h2>로그인</h2>

            <form method="POST" action="#" onsubmit="return sign_check();">
                @csrf

                <table id="login_table">

                    <tr>
                        <td id="number">
                            <input
                                type="text"
                                id="phone_number"
                                name="u_phone"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                placeholder="핸드폰번호(숫자만 입력)">
                        </td>

                        <td>
                            <input type="button" onclick="confirm_push();" value="인증번호" id="btn_chk">
                        </td>

                    </tr>

                    <tr>

                        <td colspan="2">
                            <input
                                type="text"
                                id="security_code"
                                name="password"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                placeholder="인증번호">
                        </td>
                    </tr>

                    <tr>

                        <td colspan="2">

                            <input type="submit" value="로그인" id="submit">

                        </td>

                    </tr>

                </table>

            </form>

            <p class="copyright">ⓒwowrecyle</p>

    </div>

</body>
</html>
