@extends('layouts.user_type.guest')

@section('page_title', __('Management'))

@section('content')

 <!-- Start our team Section-->
 <section class="our-team mega-section " id="our-team">
      <div class="container">
        <div class="section-heading center-heading">
          <h2 class="section-title  wow fadeInUp text-center" data-wow-delay=".2s"> Our <span class='hollow-text'></span> Management<span class="title-design-element "></span></h2>
          <div class="line line-on-center wow fadeIn" data-wow-delay=".7s"></div>
           <div class="row">
          <!--first Team Member-->
          <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
            <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.2s" data-tilt="data-tilt">
              <div class="tm-image js-tilt"><a class="tm-link" href="team-member.html"> 
                  <div class="overlay overlay-color"></div><img class="img-fluid " src="{{ asset('front/images/owner/rekha.jpeg') }}" alt="Team Member"/></a>
              </div>
              <div class="tm-details"><a class="tm-link" href="team-member.html"> 
                  <h6 class="tm-name">Smt. Rekha</h6></a><span class="tm-role">President   </span></div>
            </div>
          </div>
        </div>
      </div>
      
      </div>
      <!--Start see-more-area-->
      <!--<div class="see-more-area   wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid" href="#0">all team members</a></div>-->
    </section>
    <!-- End our team Section-->

<div class="container">
<table class="table table-striped table-bordered table-hover">
  <thead class="table-danger">
    <tr>
      <th>S. No.</th>
      <th>Name &amp; Address</th>
      <th>Post</th>
      <th>Profession</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>1</td>
      <td>Smt Rekha<br>                                   
          W/o  Sh. Moolchand Gupta<br>
        B -1st 570, J.J. Colony, Madanpur Khadar <br>
        New Delhi-110044
        </td>
      <td>President</td>
      <td>Social Worker</td>
    </tr>

    <tr>
      <td>2</td>
      <td>Ms. Prem Kumari   <br>                             
        D/o Late  Pyare Lal <br>
        38 /1299, DDA Flats, <br>
        Madangir, New Delhi-110062 <br>
       Mobile:9811808311
       
         </td>
      <td>Secretary</td>
      <td>Professional</td>
    </tr>

    <tr>
      <td>3</td>
      <td>Smt. Suman  <br>                          
        W/o  Sh Mamchand<br>
        H.NO.322  Dera Village  New Delhi -110074
        </td>
      <td>Treasurer</td>
      <td>House wife</td>
    </tr>

    <tr>
      <td>4</td>
      <td>Smt. Mari Ekka <br>                 
        W/o Sh. Simon Ekka<br>
        H.No.-D-142, Badarpur, Molar Band<br>
        New Delhi – 110044      
        </td>
      <td>Member</td>
      <td>Pvt. Sevice</td>
    </tr>

    <tr>
      <td>5</td>
      <td>Sh. Anjali Sharma  <br>                
        W/o  Sunil  Sharma<br>
        H.No – B 1570, sarita Vihar,<br>
        New Delhi - 110076    
        </td>
      <td>Member</td>
      <td>House wife</td>
    </tr>

    <tr>
      <td>6</td>
      <td>Smt. Kamlesh<br> 
        W/o Sh. Sanjay Sharma<br>
        H.No. 42 Gurjar Mohalla,<br>
        New Delhi -110074
        </td>
      <td>Member</td>
      <td>Pvt. Sevice </td>
    </tr>

    <tr>
      <td>7</td>
      <td>Smt. Sunita<br>
        W/o Sh. Pratap<br>
        H.No. 147 , Drea Village <br> 
        New Delhi -110074
        </td>
      <td>Member</td>
      <td>House wife</td>
    </tr>
  </tbody>
</table>
</div>


@endsection

@section('front-footer')

@endsection