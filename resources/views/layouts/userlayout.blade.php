<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/appuser.css">

</head>
<body>
    <nav>
        <ul>
          <li><a href="{{ route('home') }}">الصفحة الرئيسة</a></li>
          <li><a href="">حول الموقع</a></li>
          <li><a href="">حول الكلية</a></li>
          <li><a href="">موقع الجامعة</a></li>
          <li><a href="{{ route('program') }}">البرامج المستخدمة</a></li>
        </ul>
      </nav>

      <div class="header">
        <div class="word">
          <div class="title">
            <h1>نظام التعليم الالكتروني</h1>
          </div>
          <div class="content">
            <p>
              اهلاً بكم في كلية العلوم قسم الحاسوب توجد جميع المحاضرات الفديوية
              لكل المراحل الدراسية لكل الفروع ولجيمع الاستاذة وشكر خاص للكبير علي
              لؤي
            </p>
          </div>
        </div>
        <img
          src="/image/45056-contact-us.gif"
          width="500px"
          height="300px"
          srcset=""
        />
      </div>

      <main>
          @yield('usercontent')
      </main>

</body>
</html>
