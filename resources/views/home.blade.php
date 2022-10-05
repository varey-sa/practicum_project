<!DOCTYPE html>
<html>
  <center>
    <header>
     <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    </header>
      <img alt="Google" class="logo user-image-profile" src="/image/logo_search.jpg">
    <div class="bar">
    <form action="{{route('my_search')}}" method="GET" role="search">
         <input class="searchbar" type="text" name="search_key" title="Search">
         <button type="submit"><img class="voice" src="/image/search_icon.png" title="Search by Voice"></button>
    </form>
    </div>
    <div class="buttons">
    @if (Auth::guest())
         <a href="/login" class="button" type="button" style="text-decoration:none;">LOGIN</a>
         <a href="/register" class="button" type="button" style="text-decoration:none;">REGISTER</a>
          <a href="/thread" class="button" type="button" style="text-decoration:none;">EXPLORE AS GUEST</a>
    @else
    <a href="/thread" class="button" type="button" style="text-decoration:none;">EXPLORE</a>
    @endif
     </div>
  </center>
