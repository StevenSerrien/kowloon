<div id="morph-search-faq" class="morph-search-faq">
  <span id="m-close-button" class='m-close'></span>
  <div class="container">
    <div id="m-search" class="">
      <a id="advanced-filter"class='advanced-filter pointer no-decoration' data-toggle="collapse" data-target="#collapseAdvancedFilter" aria-expanded="false" aria-controls="collapseExample">
        Advanced filter <span class='arrow-filter'></span>
      </a>
      <div class="collapse clearfix" id="collapseAdvancedFilter">
        <div class="advanced-filter-area clearfix">
          <form class='clearfix'>
            <div class="col-md-6 col-sm-12">
              <h2 class='size-1x'>
                Category
              </h2>
              <div class="checkbox-item">
                <input type="checkbox" id="dogs">
                <label for="dogs">Dogs</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="cats">
                <label for="cats">Cats</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="fish">
                <label for="fish">Fish</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="birds">
                <label for="birds">Birds</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="other">
                <label for="other">other</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <h2 class='size-1x'>
                Price range
              </h2>
              <div class="price-slider clearfix">
                <div id="slider-range"></div>
                <div class="prices outer">
                <input type="text" id="amount_1" readonly>
                <div class="between-amounts">
                  -
                </div>
                <input type="text" id="amount_2" readonly>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <form class="morphsearch-form" onSubmit="return false;">
        <div class="group">
          <label class='search-placeholder'><span class='m-search-icon'></span>Just start typing and hit<span class='m-enter-icon'></span>to search</label>
          <input id="big-search-input" type="text" name="search" value="" autocomplete="off">
        </div>
        <div class="search-results">
          <div class="detail-outer">
            <p id='search-results-message'></p>
            <div class="col-sm-12 detail-boxes">

            </div>
            <div class="col-sm-12 detail-boxes">

            </div>
            <div class="col-sm-12 detail-boxes">

            </div>
          </div>
          <p>Don't find what you're looking for? Maybe use fewer words or a more general search term.</p>
          <br/>
          <p>If you still have no luck you can contact our <a>customer service</a></p>
          <button id="m-clear" type="button" name="clear-search">Clear <span class='m-clear-icon'></span></button>
        </div>
      </form>
    </div>
    <!-- end of Search section -->
    <!-- FAQ section -->
    <div id="m-faq" class="">
      <div class="faq-content">
        <h1 class='big-ass-title'>Frequently Asked Questions</h1>
        <form class="morphsearch-faq-form" onSubmit="return false;">
          <div class="group">
            <label class='search-placeholder search-placeholder-faq'><span class='m-search-icon'></span>Search on keyword<span class='m-enter-icon'></span></label>
            <input id="big-faq-search-input" type="text" name="search" value="" autocomplete="off">
          </div>
          <div class="search-results">
            <p>Don't find what you're looking for?</p>
            <br/>
            <p>You can always contact our <a>customer service</a>. We're happy to help you!</p>
            <button id="m-faq-clear" type="button" name="clear-search">Clear <span class='m-clear-icon'></span></button>
          </div>
        </form>
        <div id="post-data" class='clearfix'>
        @include('includes.faqposts')
        </div>
        <div class="ajax-load text-center">
          <span class='f-loader text-center'> </span>
        </div>
      </div>
    </div>
    <!-- end of FAQ section -->
  </div>
  <!-- Search section -->

    {{-- <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Link with href

<div class="collapse" id="collapseExample">
  <div class="well">
    ...
  </div>
</div> --}}


</div>
