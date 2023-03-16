  <!-- Client Area -->
  <div class="valuable-clients-area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="valuable-clients-slider">

                      @if (count($clients) > 0)
                          @foreach ($clients as $client)
                              @if (!empty($client->client_logo))
                                  <div class="clients-single">
                                      <img src="{{ url($client->client_logo) }}" alt="#" />
                                  </div>
                              @endif
                          @endforeach
                      @endif
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Client Area -->
