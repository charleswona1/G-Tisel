<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted mt-5">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Abonnez vous sur nos resaux sociaux</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>G-tisel
          </h6>
          <p>
            Gestion des titres dans le secteur de l'energie
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Liens publics
          </h6>
          <p>
            <a href="{{route('index')}}" class="text-reset">{{__('navbar home')}}</a>
          </p>
          <p>
            <a href="{{route('sites')}}" class="text-reset">{{__('navbar site')}}</a>
          </p>
          <p>
            <a href="http://arsel-cm.org" class="text-reset">Arsel</a>
          </p>
          <p>
            <a href="https://minee.cm/" class="text-reset">Minee</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            {{__('navbar condition')}}
          </h6>
          @if (Auth::check())
            <p>
              <a href="{{route('public.text-juridique')}}" class="text-reset">{{__('navbar juridic')}}</a>
            </p>
            <p>
              <a href="{{route('public.procedure')}}" class="text-reset">{{__('navbar procedure')}}</a>
            </p>
            <p>
              <a href="{{route('public.regime')}}" class="text-reset">{{__('navbar regime')}}</a>
            </p>
          @else
            <p>
              <a href="{{route('text-juridique')}}" class="text-reset">{{__('navbar juridic')}}</a>
            </p>
            <p>
              <a href="{{route('procedure')}}" class="text-reset">{{__('navbar procedure')}}</a>
            </p>
            <p>
              <a href="{{route('regime')}}" class="text-reset">{{__('navbar regime')}}</a>
            </p>
          @endif
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> B.P 6064 Yaoundé</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contact@gtisel.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + (237) 222 21 10 12</p>
          <p><i class="fas fa-print me-3"></i> + (237) 222 21 10 14</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#">innoEngine</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->