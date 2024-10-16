   <!-- Nav tabs -->
<ul
class="nav nav-tabs"
id="navId"
role="tablist"
>
<li class="nav-item">
    <a
        href="#tab1Id"
        class="nav-link active"
        data-bs-toggle="tab"
        aria-current="page"
        >Sistema de Catalogos</a
    >
</li>
@guest  {{-- Sirve para decir que hacer cuando no esta autentificado --}}
<li class="nav-item" role="presentation">
    <a href="{{route('login')}}" class="nav-link">login</a>
</li>
<li class="nav-item" role="presentation">
    <a href="{{route('register')}}" class="nav-link">New User</a>
</li>
<li class="nav-item" role="presentation">
    <a href="" class="nav-link">Acerca de</a>
</li>
<li class="nav-item" role="presentation">
    <a href="" class="nav-link">Contactanos</a>
</li>
<li class="nav-item" role="presentation">
    <a href="" class="nav-link">Ayuda</a>
</li>
@endguest
@auth  {{-- Sirve para decir que hacer cuando esta autentificado --}}
<li class="nav-item" role="presentation">
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button style="background: transparent; border: none;">logout</button>
    </form>
</li>
@endauth
</ul>
<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
    
</div>
<div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
<div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
<div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
<div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
var triggerEl = document.querySelector("#navId a");
bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>
