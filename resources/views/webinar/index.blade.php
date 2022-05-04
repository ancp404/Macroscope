<x-app-layout>

    <div class="container-fluid bg-secondary bg-opacity-10 p-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <h1 class="fs-1 fw-bold w-100">Our Webinars</h1>
            </div>
            <hr style="width: 10%">
        
            <div class="card mb-5">
                <div class="card-header fw-bold">
                  Why our webinars?
                </div>
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Free
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Insightful
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Competent Speakers
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
        </div>
        
    </div>
    
    <div class="container mb-4 mt-4">
        <div class="d-flex align-items-center justify-content-between">
            <h3 class="mt-4">Upcoming Webinars</h3>
            @can('admin')
            <div>
                <a class="btn btn-dark" href="{{route('webinar.insert')}}" role="button">Insert</a>
            </div>
            @endcan
        </div>
        <hr class="mb-4">
      
      @foreach($webinars as $webinar)
      <div class="card mb-3" style="width: 18rem;">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">{{$webinar->title}}</h5>

                @can('admin')
                <div>
                    <a class="btn btn-primary" href="webinar/edit/{{$webinar->id}}" role="button">Edit</a>
                </div>
                @endcan
            </div>
          
        
          <p class="card-text">{{$webinar->speaker}}</p>
          <p class="card-text">{{$webinar->date}}</p>
          <a href="{{$webinar->link}}" class="btn btn-primary">Enter</a>
        </div>
      </div>
      @endforeach

      {{$webinars->links()}}
    </div>
      

</x-app-layout>