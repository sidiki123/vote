  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Souhaitez-vous réelement vous deconnecter?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">Appuyer sur "Se deconnecter" pour quitter la session</div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>

              {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-warning" type="button" data-dismiss="modal">
                <x-jet-dropdown-link style="text-decoration:none; color:white;" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Se deconnecter') }}
                </x-jet-dropdown-link>
                </button>
              </form> --}}

          </div>
      </div>
  </div>
</div>
