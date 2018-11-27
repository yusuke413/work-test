<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

    <!DOCTYPE html>

    <html>

    <head>

        <meta charset="UTF-8">

        <title>HelloServlet</title>

    </head>

    <body>

        <input type="button" value="HelloServlet"
            onClick="location.href='HelloServlet'">
<!--             welcome.jspは呼び出し先の名前それをきちんと -->
<!--             理解していなかったので”welcomeServlet”と入力して -->
<!--             いたが全く気付かなかった、コピペして少しずつ削りながら -->
<!--             場所を特定してクリックしたときのアクションの場所だと -->
<!--             気づいた、所要時間105分 砕け散りたい… -->
<!--             マークアップランゲージでもcssを関連付けるのにhrefを使って -->
<!--             いたのを忘れていた、写経だけだが、今までで一番てこずっている。 -->
        <input type="button" value="WelcomeServlet"
            onClick="location.href='welcome.jsp'">

        <input type="button" value="問い合わせ"
            onclick="location.href='inquiry.jsp'">

        <input type="button" value="MySQLServlet"
            onClick="location.href='MySQLServlet'">

        GET通信

        <form method="get" action="TestServlet">

            <input type="text"name="username">

            <input type="password" name="password">

            <input type="submit" value="送信">

        </form>

        POST通信

        <form method="post" action="TestServlet">

            <input type="text" name="username">

            <input type="password" name="password">

            <input type="submit" value="送信">

        </form>

    </body>

    </html>