@extends('v1/website/master/master-contact')

@section('content')

<div class="custom-header no-bg-img">
  <div class="mt-container">
    <h1 class="entry-title">Contact Us</h1>
    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
      <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
        <meta name="numberOfItems" content="2" />
        <meta name="itemListOrder" content="Ascending" />
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="{{route('website.home')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <span itemprop="item"><span itemprop="name">Contact Us</span></span>
          <meta itemprop="position" content="2" />
        </li>
      </ul>
    </div>
  </div>
</div>

<div id="content" class="site-content">
	<div class="mt-container">
    <form action="#">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="form-group">
          <label>Your Name (required)</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label>Your Email (required)</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label>Subject (required)</label>
          <input type="text" name="subject" class="form-control" id="subject">
        </div>
        <div class="form-group">
          <label>Mobile No.</label>
          <input type="number" name="mobile_no" class="form-control" id="mobile_no">
        </div>
        <div class="form-group">
          <label>Landline No.</label>
          <input type="number" name="landline_no" class="form-control" id="landline_no">
        </div>
        <div class="form-group">
          <label>School / Affiliation</label>
          <input type="text" name="landline_no" class="form-control" id="landline_no">
        </div>
        <div class="form-group">
          <label>Address</label>
          <textarea name="address" id="address" cols="30" rows="3" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label>Your Message (required)</label>
          <textarea class="form-control" name="message" id="message" rows="7"></textarea>
        </div>
        <div class="form-group">
          <button>Send</button>
        </div>
      </div>
    </form>
	</div>
</div>

@stop