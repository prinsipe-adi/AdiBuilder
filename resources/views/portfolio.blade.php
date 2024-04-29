<div id="portfolio">
    <section class="portfolio section-padding">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <h2>Our Projects</h2>
                            <p>Projects blend innovation, precision, and sustainability for iconic results<br />while prioritizing sustainability and client satisfaction.</p>
                        </div>
                    </div>
            </div>
            <div class="row">
                {{-- database integration from admin page to userface portfoio--}}
                @foreach ($portfolios as $portfolio)

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center bg-white pb-2 h-100">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                            <img src="{{$portfolio->googleDriveImage}}" alt="" class="img-fluid" />
                            </div>
                            <h3 class="card-title">{{$portfolio->title}}</h3>
                            <p class="lead">
                                {{$portfolio->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div>
                    {{$portfolios->links()}}
                </div>

            </div>
        </div>
    </section>
</div>
