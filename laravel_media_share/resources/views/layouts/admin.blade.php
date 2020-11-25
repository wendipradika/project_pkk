
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="wrap">
    <div class="navbar">
            <h4>Admin Page</h4>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <i class="fa fa-arrow-circle-left"></i>
                <input type="submit" class="logout-btn" value="Log Out">
            </form>
    </div>

    <nav class="sidebar">
        <ul>
            <li><a style="text-decoration: none;" href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li>
                <a style="text-decoration: none;" class="cov-btn" href=""> Covid-19 <span class="fa fa-caret-down first"></span></a>
                <ul class="cov-show">
                    <li><a style="text-decoration: none;" href="{{ route('data-covid') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Data Covid</a></li>
                    <li><a style="text-decoration: none;" href="{{ route('update') }}"><i class="fa fa-edit"></i> Update Data</a></li>
                </ul>
            </li>
            <li>
                <a style="text-decoration: none;" class="ber-btn" href="">Berita <span class="fa fa-caret-down second"></span></a>
                <ul class="ber-show">
                    <li><a style="text-decoration: none;" href="{{ route('data-berita') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Data Berita</a></li>
                    <li><a style="text-decoration: none;" href="{{ route('tambah-berita') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Berita</a></li>
                </ul>
            </li>
            <li><a style="text-decoration: none;" href=""{{ route('user') }}><i class="fa fa-address-book" aria-hidden="true"></i> User</a></li>
        </ul>
    </nav>
</div>

<div class="content">
    @yield('konten')
</div>


<script type="text/javascript">
    $('cov-btn').click(function(){
        $('nav li ul .cov-show').toggleClass("show");
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
