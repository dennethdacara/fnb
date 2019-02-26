@extends('v1/website/master/master-about')

<style>
  #customJumbotron { background-color:#828282 !important; padding-top:12%; padding-bottom:12%; }
  #publisherJumbotron { background-color:#EBEBEB !important; padding-top:5%; padding-bottom:0%; padding-left:5%; padding-right:5%; }
  #publisherHeadText { color:black; font-size:40px; }
  #aboutHeadText { color:white; font-size:40px; }
  #aboutHeadSubText { color: white; font-size: 15px; }
  .centerImage { display: block; margin-left: auto; margin-right: auto; width: 50%;}
  .dividerSeparator { border-top-style: solid; border-top-width: 5px; border-top-color: #c00000; width: 20%; }
  .redText { color: #C00000; }
</style>

@section('content')

<div id="content" class="site-content">
  <div class="container">

    <!--header jumbotron-->
    <div class="row">
      <div class="jumbotron col" id="customJumbotron">
        <span id="aboutHeadText"><center>FNB EDUCATIONAL, INC.</center></span>
        <div class="col-lg-8 offset-lg-2">
          <span id="aboutHeadSubText"><center>
            stands for growth, dynamism, resiliency, and strategic thinking ahead of time. 
            It has continued to explore viable opportunities and adapt to the many dynamic demands of change.
          </center></span>
        </div>
      </div>
    </div>
    <!--/-->

    <div style="height:50px;"></div>

    <!-- mission/vision-->
    <div class="row">
      <div class="col-lg-6">
        <div class="dividerSeparator"></div>
        <h1>OUR MISSION</h1>
        <p>
          It Is our mission to facilitate learning and bring out the best in the Filipino through access to stimulating, comprehensive, and affordable instructional materials. 
          We are committed to help nurture, improve, and uplift the quality of education in the Philippines.
        </p>
      </div>
      <div class="col-lg-6">
        <h1>OUR VISION</h1>
        <p>
          FNB Educational, Inc. will continue to establish strong linkages with the educational community through the efforts of dynamic and inspiring leaders and the wonderful teamwork of skilled and dedicated executives, editors, 
          consultants, writers, production, sales, finance, printing, and distribution staff, as well as the generous support/patronage of client schools, friends, and benefactors
        </p>
      </div>
    </div>
    <!--/-->

    <!-- message from the publisher-->
    <div class="row">
      <div class="jumbotron col" id="publisherJumbotron">
        <center><div class="dividerSeparator"></div></center><br>
        <span id="publisherHeadText"><center>MESSAGE FROM THE PUBLISHER</center></span>
        <div class="col-lg-12">
          <p>
            For several decades now, FNB Educational Inc. has been committed to help nurture, improve and elevate the quality of education 
            in the Philippines through molding the minds of the children by providing 
            the educational community with affordable high-quality text books and instructional materials. At this point, 
            we trust that we have achieved our mission because of the continued patronage of the private schools nationwide.
          </p>
          <p>
            On our 40th year, your support and recognition continuously inspire us to commit to our mission. 
            As we enter the new generation and with the growing need to foster effective learning, 
            it is with immense pride that we share with you the newest technology that can help achieve the undertaking of institutions. 
            We are now leaning towards the integration of the Learning Management System to support the development 
            and revolutionize teaching and learning process as we guarantee our clients exceptional educational services.
          </p>
          <p>
            We do recognize a wide-open world of possibilities and opportunities with you; our clients and partners 
            and for the year of undaunted support, thank you so much and we are very grateful for your continuous patronage!
          </p>
          <p>Jan Michael F. Balgan</p>
          <p><img src="{{ asset('img/png/signature1.png') }}" style="height:50px;width:150px;"></p>
          <p>President</p>
        </div>
      </div>
    </div>
    <!--/-->

    <div style="height:50px;"></div>

    <!-- history -->
    <div class="row">
      <div class="col-lg-12" style="padding-left:5%; padding-right:5%;">
        <center><div class="dividerSeparator"></div></center><br>
        <h1 style="text-align:center;font-weight:normal;">HISTORY</h1>
        <h2 style="text-align:center;font-weight:normal;">THE VISION & THE BEGINNING</h2>
        <p>
          FNB Educational, Inc. stands for growth, dynamism, and strategic thinking ahead of time. FNB started in 1978 with a vision to help bring out 
          the best in the young Filipino through access to affordable, comprehensive, relevant, and genuinely effective instructional 
          materials. The first set of elementary school textbooks in some core subjects printed in 1978 mirrored the 
          idealism of its founder and hardworking staff of five. The challenge then, as it is today, 
          was to ensure the quality in the content, design, and material of the textbooks being developed and printed. 
          Marketing as well as distribution was handled by another outfit. The first few years were indeed challenging, 
          inherent of start-up and growth.
        </p>

        <p>
          In the early eighties, FNB offered a broader selection of textbooks and workbooks. 
          It also started conducting seminars and workshops for educators, facilitated by competent FNB editors and authors. 
          By 1989, the company had an expanded output of noteworthy titles and series.
        </p>

        <p>
          Steadily, its management succeeded in assigning regional sales managers all over the country. 
          FNB products made inroads nationwide with the organization of this coherent sales force. In 1990, 
          FNB wound up the production of SEDP-based textbooks for the secondary level. From the core subjects – Language, 
          Reading, Filipino, Wika and Pagbasa, Sibika / Araling Panlipunan, Science and Mathematics – for preschool, elementary, 
          and secondary levels, FNB has branched out into other curricular areas, such as CLE, Values Education, 
          PEHM, THE, CAT, MAPE, GMRC, HELE, Computer Education, and Writing. It has also addressed the growing need 
          for supplementary and enrichment resources through the Filipino Supplementary Reader, 
          Reading Skill Book, Language Workbook, NEAT and NSAT Practice Tests, Resource Book on Filipino heroes, and Science Laboratory Manual. 
        </p>

        <p>
          FNB responded to the first DECS Textbook Call of 1995, and most of the textbooks and teacher’s manuals it submitted 
          for evaluation were officially approved for use in the public schools as per DECS ORDER No. 62, S. 1997. 
          Likewise, as stated in DECS ORDER No. 8, S. 1999 and DECS ORDER No. 35, S. 2000, 
          DECS-IMCS approved the majority of learning materials of FNB in the second DECS Textbook Call 
          and Third DECS Textbook Call, respectively. 
        </p>

        <p>
          To keep pace with the fast-growing Information Technology (IT) industry and to help students unravel 
          the maximum capabilities of their computers, the company provides the educational community with the 
          most up-to-date and engaging Computer Education Series from preschool to high school. 
        </p>
      </div>
    </div>
    <!--/-->

    <div style="height:50px;"></div>

    <!-- our strength & gratitude-->
    <div class="row">
      <div class="jumbotron col" id="publisherJumbotron">
        <center><div class="dividerSeparator"></div></center><br>
        <span id="publisherHeadText"><center>OUR STRENGTH & GRATITUDE</center></span>
        <div class="col-lg-12">
          <p>
            Indeed, FNB has come a long way. After almost three decades of struggle, growth, and productivity, FNB, with humility, 
            shares the forefront of the educational publishing industry. This achievement is largely attributed to the key asset of 
            FNB – its human resources guided by dynamic and inspiring leaders and the wonderful teamwork of skilled and 
            dedicated teams of executives, editors, consultants, writers, production, sales, finance, printing, and 
            distribution staff and the generous support/patronage of client schools, friends and benefactors. 
          </p>
          <p>
            The future beckons with greater challenges. FNB reaffirms its commitment to help inspire, nurture, 
            and shape the potentials of the Filipino youth. This commitment has given FNB direction in setting the 
            highest standards for itself in book development.
          </p>
          <p>
            To the Heads, Administrators, Teachers, Staffs, as well as the Parents, and Students, 
            FNB offers its sincere gratitude and uncompromising service.
          </p>
        </div>
      </div>
    </div>
    <!--/-->

    <div style="height:50px;"></div>

    <!-- our team-->
    <div class="row">
      <div class="col-lg-12">
        <center><div class="dividerSeparator"></div></center><br>
        <div style="text-align:center;">
          <h1 style="text-align:center;font-weight:normal;">OUR TEAM</h1>
          <p><img src="{{ asset('img/png/cirilo.jpg') }}" style="height:128px;width:128px;"></p>
          <h4 class="redText">Cirilio Villanueva-Balgan</h4>
          <p>Chairman</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div style="text-align:center;">
          <p><img src="{{ asset('img/png/jan_michael.JPG') }}" style="height:128px;width:128px;"></p>
          <h4 class="redText">Jan Michael Flores-Balgan</h4>
          <p>President</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div style="text-align:center;">
          <p><img src="{{ asset('img/orgchart_images/madam_annette.jpg') }}" style="height:128px;width:128px;"></p>
          <h4 class="redText">Annette F. Balgan</h4>
          <p>E.V.P.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div style="text-align:center;">
          <p><img src="{{ asset('img/orgchart_images/monette.jpg') }}" style="height:128px;width:128px;"></p>
          <h4 class="redText">Rina Monnette F. Balgan</h4>
          <p>Corporate Secretary</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 offset-lg-1">
        <div class="row">
          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/dindo.JPG') }}" style="height:128px;width:128px;"></p>
              <h4 class="redText">Dindo Reyes</h4>
              <p>VP-Sales & Marketing</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/beth.jpg') }}" style="height:128px;width:128px;"></p>
              <h4 class="redText">Elizabeth Valsorable</h4>
              <p>VP-Operations</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/orgchart_images/doris.png') }}" style="height:128px;width:128px;"></p>
              <h4 class="redText">Dolores Napilay</h4>
              <p>VP-Finance</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/julie.JPG') }}" style="height:128px;width:128px;"></p>
              <h4 class="redText">Juliana Marfa</h4>
              <p>VP-Whse & Delivery</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/munsayac.JPG') }}" style="height:128px;width:128px;"></p>
              <h4 class="redText">Josephina M. Munsayac</h4>
              <p>VP-Production</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 offset-lg-1">
        <div class="row">
          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/man-2.png') }}" style="height:128px;width:128px;"></p>
              <p>Area Sales Manager & Sales Staff</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/man-2.png') }}" style="height:128px;width:128px;"></p>
              <p>Administrative Staff, Accounting Staff, Printing Department</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/man-2.png') }}" style="height:128px;width:128px;"></p>
              <p>Credit & Collection</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/man-2.png') }}" style="height:128px;width:128px;"></p>
              <p>Inventory Staff & Delivery Staff</p>
            </div>
          </div>

          <div class="col-lg-2">
            <div style="text-align:center;">
              <p><img src="{{ asset('img/png/man-2.png') }}" style="height:128px;width:128px;"></p>
              <p>Editor, Authors, Book Designers, Illustrator</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/-->

    <!-- our topnotch editors-->
    <div class="row">
      <div class="jumbotron col" id="publisherJumbotron">
        <center><div class="dividerSeparator"></div></center><br>
        <span id="publisherHeadText"><center>OUR TOPNOTCH EDITORS</center></span>
        
        <div class="row" style="text-align:center;">
          <div class="col-lg-6">
            <h4 class="redText">Sr. Iluminada C. Coronel, FMM</h4>
          </div>
          <div class="col-lg-6">
            <h4 class="redText">Josephina M. Munsayac</h4>
          </div>
        </div>

        <div class="row" style="text-align:center;">
          <div class="col-lg-6">
            <h4 class="redText">Teresita C. Cruz</h4>
          </div>
          <div class="col-lg-6">
            <h4 class="redText">Dr. Socorro R. Villamejor</h4>
          </div>
        </div>

        <div class="row" style="text-align:center;">
          <div class="col-lg-6">
            <h4 class="redText">Patrocino C. Yogore</h4>
          </div>
          <div class="col-lg-6">
            <h4 class="redText">Dr. Cleofe C. Mendinueto</h4>
          </div>
        </div>

        <div class="row" style="text-align:center;">
          <div class="col-lg-6">
            <h4 class="redText">Jose Perico H.</h4>
          </div>
          <div class="col-lg-6">
            <h4 class="redText">Dr. Ma. Christina A. Astorga</h4>
          </div>
        </div>


      </div>
    </div>
    <!--/-->

  </div>
</div>

<div style="height:50px;"></div>

@stop