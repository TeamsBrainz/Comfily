@extends('layouts.app')

@section('content')

  <!-- first page -->
  <section>
    <div class="wrapper">
      <h1 class="heading">LET US FIND YOUR PERFECT HOME</h1>
      <div class="overlay"> </div>
      <img src="images/firstpics.jpg" class="img-fluid first-image  alt="">
    </div>
    <div first-page>
      <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search-box">

        <div class="input-group search-wrapper form-container">
          <input type="text" name="search" class="form-control search-input"
            placeholder="Search by city, community, zip code or street " autofocus="autofocus" autocomplete="off"
            onclick="setBgToDark()" />
          <span class="input-group-btn">
            <button class="btn btn-search"></button>
              <img class="logo" src="images/icons8-search.svg" width="40" alt="" />
            </button>
          </span>
        </div>
      </div>
  </section>
  <!-- <div class="wrapper">
      <img src="images/firstpics.jpg" id="first-image" class="img-fluid" alt="">
      <div class="search-wrapper">
        <input type="search" placeholder="search">
      </div>
    </div> -->


  <!-- next section -->
  <section id="renters" class="renters  section-padding">
    <div class="container ">
      <hr>
      <div class="row search-div ">


        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <h2 class="h2-headings"> Let our search <br><span class="guide">Guide you</span></h2>
          <p>Search thousands of up-to-date property listings on our easy-to-use website. Narrow down your options by
            choosing what's most important to you, such as number of bedrooms and bathrooms, price range, location, pet
            policy and more.</p>
          <p>Users can also serach for rentals that fall within a particular</p>
          <a href="#" class="btn btn-search">Start My Search</a>
        </div>

        <div class="col-lg-4 col-md-12 col-12 ps-lg-5 mt-5 ">
          <div class="about-img">
            <img src="images/house1.jpeg" class="img-fluid align-items-right renters-img " alt="">
          </div>
        </div>



      </div>
      <hr>
    </div>

  </section>


  <!-- verify section -->
  <section id="verify" class="verify  section-padding">
    <div class="container ">
      <div class="row verify-div ">
        <div class="col-md-12 ps-lg-5 mt-md-5">
          <div class="section-header text-center pb-5">
            <h2 class="h2-headings">We verify homeowners via signup before granting access to Upload properties</h2>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt">
          <p class="align-text-left">upload your property as a landlord and reach out to thousands of potential<br>
            renters. Be the first to verify your account to gain premium access to our
            products.
          </p>
          <a href="#" class="btn btn-search">Add Listing</a>
        </div>


      </div>
    </div>
  </section>

  <!-- sign up or login section -->
  <section id="signup" class="signup  section-padding">
    <div class="container ">
      <hr>
      <div class="row signup-div">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="signup-img">
            <img src="images/house6.png" class="img-fluid img-thumbnail" alt="">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2 class="h2-headings"> Signup or login as a tenant <br>to see <span class="guide-signup">Available
                Homes</span></h2>
            <p>Creating an account or signing up is easy with a single click. Reduce cycle
              times and hassles. Contact homeowners or agents.
            </p>

            <a href="#" class="btn btn-search">Start My Search</a>
          </div>

        </div>
      </div>
      <hr>
    </div>
  </section>

  <!-- table section -->
  <section id="table" class="table  section-padding">
    <div class="container">
      <div class="row">
        <div class="table-responsive sm md lg xl xxl">
          <table class="table caption-top table-borderless">
            <caption>Popular Communities</caption>
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">PostalCode</th>
                <th scope="col">LGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="lga">Okwe</td>
                <td>32001</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Cablepoint</td>
                <td>320213</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Central Core Area</td>
                <td>320241</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Ezenei</td>
                <td>320212</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Isieke</td>
                <td>320232</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Okpanam Rd</td>
                <td>320242</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Umuagu</td>
                <td>320233</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Umueze</td>
                <td>320211</td>
                <td>Oshimili South</td>
              </tr>
              <tr>
                <td class="lga">Umuonaje</td>
                <td>320241</td>
                <td>Oshimili South</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

@endsection

