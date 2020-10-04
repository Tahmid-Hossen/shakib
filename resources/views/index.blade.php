@extends('welcome')
@section('content')
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item slider-bg active">
                <img src="images/Farewell 7,8,9.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>SMUCT CSE Departments students has organized a Farewell program on 26th December, 2019</h5>
                  <p>The farewell program waas organized for the batch 6,7(CSIT), ),9,10(CSE).Almost all the students & Graduates were present at the ceremony</p>
                </div>
              </div>
              <div class="carousel-item slider-bg">
                <img src="images/Seminar.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Students of CSE Departments has organized a Career based seminar for the first time</h5>
                  <p>The Cheif Guest of this seminar was Jhankar Mahabub who is a professional Software Engineer at the Neilsen Company,South Dekota.Students learnt about IT Career oppurtunities in our contry.</p>
                </div>
              </div>
              <div class="carousel-item slider-bg">
                <img src="images/Tech-fest.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>One of the biggest event organized by CSE Departments was Tech-Fest 2018</h5>
                  <p>Tech-Fest was basically based on robotics projects.More then 25 project was showcasing on that day.The Vice chairman of Shanot-Mariam University of Creative Technology was present on that event.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>


    <div class="container categories">
        <div class="row">
            <div class="col-sm-4">
                <div class="cart1 d-flex align-items-center d-flex justify-content-center">
                    <h1>Faculty</h1>
                    <img src="images/Faculty.png" alt="">
                </div>

            </div>
            <div class="col-sm-4">
                <div class="cart2 d-flex align-items-center d-flex justify-content-center">
                    <a href="{{ Route('all.student') }}">
                    <h1>Students</h1>
                    <img src="images/2cd43b_3e6796c8ae9c415a811a73c28ed089e9_mv2.png" alt=""></a>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="cart3 d-flex align-items-center d-flex justify-content-center">
                    <h1>Alumni</h1>
                    <img src="images/Education,_Studying,_University,_Alumni_-_icon.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
      <h1 class="mb-2">UpComming Events</h1>
    </div>

    <div class="container">
      <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card">
              <img src="images/IMG_3961.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CSE Get-Together 2020</h5>
                <p class="card-text">It is to inform that, all the regular students & alumnies of CSE Department are cordially invited to this grand event</p>
                <button type="button" class="btn btn-success">Regestration</button>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="images/IMG_5280.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Career Meet-Up 2020</h5>
                <p class="card-text">It is a seminar of CSE career related guide line.The speakers will be our respected Alumnies.They will share thier career journy in IT field.All the regular students are requested to present in this event.</p>
                <button type="button" class="btn btn-success">Regestration</button>
              </div>
            </div>
          </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/IMG_5303.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Android Apps Development Course</h5>
              <p class="card-text">Who has the basic idea of Object Oriented Programming Language & interested to build their career in Apps development are requested to regestration for the course module.</p>
              <button type="button" class="btn btn-success">Regestration</button>
            </div>
          </div>
        </div>
          <div class="col mb-4">
            <div class="card">
              <img src="images/89073845_2390926887873433_5052511411465355264_n.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CSE Sports Carnival 2020</h5>
                <p class="card-text">This is going to be the biggest sports event of this department.All the regular students are requested to regester for team selection.</p>
                <button type="button" class="btn btn-success">Regestration</button>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="container d-flex justify-content-center">
      <h1>Gallery</h1>
    </div>

    <div class="container">
      <div class="card-columns">
        <div class="card">
          <img src="images/it-fest.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">IT-Fest 2019</h5>
            <p class="card-text">One of CSE/CSIT departments successful event, more then 50 students with thier team-mates were showcasing their projects.</p>
            <button type="button" class="btn btn-danger">More Photos</button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Blood Bank</h5>
            <p class="card-text">This is the Official blood bank site for our university, to know more about this site click 'Get In' button</p>
            <button type="button" class="btn btn-danger">Get In</button>
          </div>
        </div>
        <div class="card">
          <img src="images/Tech-fest.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tech-Fest 2018</h5>
            <p class="card-text">This event was one of the very first event of this departments. Basically it was intra-university microcontroller project contest. Four batches were competing with each other with some exceptional projects.</p>
            <button type="button" class="btn btn-danger">More Photos</button>
          </div>
        </div>
        <div class="card bg-primary text-white text-center p-3">
          <blockquote class="blockquote mb-0">
            <p>All The Information You Need to Know About,</p>
            <h5>Departments of CSE & CSIT</h5>
            <p>In One Place</p>
          </blockquote>
        </div>
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">SMUCSEC</h5>
            <p class="card-text">Shanto-Mariam University Computer Science & Engineering Committee is the first & the only students committee in this department.To know more about this committee click the 'Know More' button</p>
            <button type="button" class="btn btn-danger">Know More</button>
          </div>
        </div>
        <div class="card">
          <img src="images/rag-day.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rag Day of CSE/CSIT-6/9</h5>
            <p class="card-text">The first batch to organize a flash mode in our university was CSE/CSIT-6,9 batch. Full departments including our faculty member were present on this day.</p>
            <button type="button" class="btn btn-danger">More Photos</button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">CR's List</h5>
            <p class="card-text">If you need to contact or need someone from any batch, here is the list of all the CR's of CSE/CSIT Departments</p>
            <button type="button" class="btn btn-danger">See List</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container slider-bg d-flex justify-content-center d-flex align-items-center">
      <div class="subscription">
        <h1>Send Us a Mail</h1>
        <p>If you have any quary, feel free to send mail on smucsec@gmail.com</p>
        <input type="text" class="form-control" placeholder="Enter your mail">
        <button type="button" class="btn btn-success btn-s mt-2">Subscribe</button>
      </div>
    </div>


@endsection