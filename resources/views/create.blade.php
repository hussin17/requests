<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>

<body>

    <h3>create: naw requests</h3>
    <h5>الرايسية</h5>

    <form action="{{ route('insert') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="الاسم"><br><br>
        <input type="text" name="phone" placeholder="رقم الهاتف"><br><br>
        <input type="email" name="email" placeholder="البريد الإلكتروني"><br><br>

        <select name="id_amdass">
            <option value="egypt">سفارة مصر</option>
            <option value="saudi_arabia">سفارة السعودية</option>
            <option value="united_states">سفارة الولايات المتحدة</option>
            <option value="holland">سفارة هولندا</option>
            <option value="china">سفارة الصين</option>
            <option value="india">سفارة الهند</option>
            <option value="qatar">سفارة قطر</option>
        </select><br><br>

        <select name="id_visa">
            <option value="tourist">سياحية</option>
            <option value="busines">تجارية</option>
            <option value="student">طالب</option>
            <option value="work">عمالة</option>
            <option value="visit">زيارة</option>
            <option value="religious">الدينية</option>
            <option value="Diplomacy">الدبلوماسية</option>
        </select><br><br>

        <input type="file" name="src">
        <button type="submit">حجز موعد</button>
    </form>


</body>

</html>
