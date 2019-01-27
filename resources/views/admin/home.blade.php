@extends('layouts.layout-home')

@section ('content')
        
        <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">   
                <hr class="type_1">               
                    <div class="col-lg-3">
                        
                        <div class="blog_right_sidebar">
                            
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img img-fluid" src="{{ URL::asset('opium/img/blog/author.png ')}}" alt="">
                                <h4>Charlie Barber: Admin</h4>
                                <h5>2 Yrs of Tutoring</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <div class="br"></div>
                                <h4> Ksh. 244/569 </h4>

                                <div class="br"></div>
                            </aside>
                            
                            
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Tutor Menu</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Current</p>
                                            <p>7</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p> Bids</p>
                                            <p>6</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>For Revision</p>
                                            <p>4</p>
                                        </a>
                                    </li>                                    
                                    
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Completed</p>
                                            <p>8</p>
                                        </a>
                                    </li>
                                  
                                                                                                            
                                </ul>
                            </aside>
                        </div>
                    </div>
                      <div class="col-lg-9">
                        <div class="blog_left_sidebar">
                            <article class="blog_style1"; style="text-align: center; ">
                                
                                <a class="logo" href="#"><img src="{{ URL::asset('opium/img/logo.png ')}}" alt=""></a>
                            </article>

                             <article class="blog_style1"; style="text-align: center;">
                               
                               <a href="#" class="btn btn-secondary btn-rounded mb-4" data-toggle="modal" data-target="#frameModalBottom">Ask Question Now!</a>
                            </article>
                            
                            <article class="blog_style1";">
                                
                                <div class="blog_text">
                                    <div class="blog_text_inner">
                                        <div class="cat">
                                            <a href="#" class="cat_btn"># 34546454</a>
                                            <a class="cat_btn" href="#">Category</a>
                                            <a class="cat_btn" href="#">Pages: 3 

                                            <i class="fa fa-calendar" aria-hidden="true"></i> 6hrs 4 min
                                            <i class="fa fa-money" aria-hidden="true"></i> 34  </a>
                                            <a href="#" class="cat_btn"><i class="fa fa-comments" aria-hidden="true"></i>4</a>
                                            
                                        </div>
                                        <a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                        <a class="blog_btn" href="#">More...</a>
                                    </div>
                                </div>
                            </article>
                            
                            </div>
                            </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="modal fade bottom" id="frameModalBottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
            <div class="modal-dialog modal-frame modal-bottom col-xl-10" role="document">


              <div class="modal-content">
                <div class="modal-body">
                  <div class="modal-header ">
                        <h4 class="modal-title" id="exampleModalLongTitle"> Post your Question</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>



                  <div class="row d-flex justify-content-center align-items-center">

                  
                    <div class="col-xl-12">
                        <form method="post" action=""  enctype="multipart/form-data">

                        <div class="form-group">
                          <input type="" placeholder="Topic" class="form-control"   name="topic">
                        </div>
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                          @include('part.editor')
                      </div>
                      

                    <div class="form-group">
                         
                    <div class="form-group">        
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="file[]" multiple id="file-input" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose files</label>
                      </div>
                    </div>
                    </div>      
                    <div class="form-group">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Continue</button>
                </div>
                    </form>

                    </div>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>

                                             
                                

       
        <!--================Blog Area =================-->
        
        @endsection 