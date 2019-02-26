@extends('v1/website/master/master-lms')

<style>
  #customJumbotron { background-color: #828282 !important; padding-top: 12%; padding-bottom: 12%; }
  #lmsHeadText { color:white;font-size:40px; }
  .centerImage {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
</style>

@section('content')

<div class="custom-header no-bg-img">
  <div class="mt-container">
    <h1 class="entry-title">Learning Management System</h1>
    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
      <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
        <meta name="numberOfItems" content="2" />
        <meta name="itemListOrder" content="Ascending" />
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="{{route('website.home')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <span itemprop="item"><span itemprop="name">Learning Management System</span></span>
          <meta itemprop="position" content="2" />
        </li>
      </ul>
    </div>
  </div>
</div>

<div id="content" class="site-content">
  <div class="container">
    <div class="row">
      <div class="jumbotron col" id="customJumbotron">
        <span id="lmsHeadText"><center>LEARNING MANAGEMENT SYSTEM</center></span>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <h2>INTEGRATED SYSTEMS FOR INTELLIGENT PINOY (ISIP)</h2>
        <p>
          is a Leaning Management System that offers a complete cycle of learning 
          solution that comprises tools for interactive and responsive learning for students.
        </p>

        <p>The ISIP LMS caters to K-12 education through internet-based  system.</p>

        <p>
          The system is designed manage content and build course learning experiences. 
          It allows seamless, virtual interaction for all administrators, teachers and students. 
          Integrated Content were K-12 Curriculum aligned including lessons and activities.
        </p>
      </div>

      <div class="col-lg-6 col-sm-12">
        <img src="{{ asset('img/lms_images/picture1.png') }}" style="height:300px; width:300px;" class="centerImage">
      </div>
    </div>

    <div class="row" style="margin-top:80px;">
      <div class="col-lg-6 col-sm-12">
        <img src="{{ asset('img/lms_images/picture2.png') }}" style="height:500px; width:300px;" class="centerImage">
      </div>

      <div class="col-lg-6 col-sm-12">
        <h2 style="text-align:center;">FEATURES OF ISIP</h2>

        <ol>
          <li>Curriculum Based Content</li>
          <li>E- Learning Materials</li>
          <li>Dynamic Student and Teachers Forums</li>
          <li>Analytics</li>
          <li>Notifications to Students, Teachers, Parents and Administrators</li>
          <li>Vital Tools to manage Classroom, Lessons, and Students</li>
          <li>Content Library</li>
          <li>Built-in the system and On-Line</li>
          <li>Built-In Dashboards for Students, Teachers, Parents and Administrators</li>
        </ol>

        <ol>
          <li>
            Books from Grade 1 to Grade 10 of Core Subjects:
            <ul>
              <li>Math</li>
              <li>Araling Panlipunan</li>
              <li>English</li>
              <li>Science</li>
              <li>Filipino</li>
              <li>ICP</li>
              <li>MAPEH</li>
            </ul>
          </li>
        </ol>

      </div>
    </div>

    <div class="row" style="margin-top:80px;">
      <div class="col-lg-6 col-sm-12">
        <p>
          The content and system integrated in ISIP as a Learning Management System are organized, 
          structured and aligned on the guidelines, policies and standards of the Philippine K12 Curriculum.
        </p>
        <p>This is specifically designed for the use of Filipino learners and Instructors on the following levels:</p>
        <ol>
          <li>Basic Education</li>
          <li>Secondary Education</li>
          <li>Senior High School</li>
        </ol>
      </div>

      <div class="col-lg-6 col-sm-12">
        <img src="{{ asset('img/lms_images/picture3.png') }}" style="height:300px; width:250px;" class="centerImage">
      </div>
    </div>


  </div>
</div>
<div style="height:50px;"></div>

@stop