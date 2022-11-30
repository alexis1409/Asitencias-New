@extends('layouts/contentLayoutMaster')

@section('title', 'Spinner')

@section('content')
<!-- Start Of Bootstrap Spinners -->

<section id="bootstrap-spinners">
  <div class="row match-height">
    <!-- Border Spinner starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Border Spinners</h4>
        </div>
        <div class="card-body">
          <p class="card-text">Use class <code>.spinner-border</code> for a lightweight loading indicator.</p>
          <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Border Spinner ends -->

    <!-- Colored Spinner starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Colored Spinners</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            You can customize the color with text color utilities. You can use any of our text color utilities on the
            standard spinner. Use <code>.text-{color}</code>
          </p>
          <div class="demo-inline-spacing">
            <div class="spinner-border text-primary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-secondary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-success" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-danger" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-warning" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-info" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-light" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-dark" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Colored Spinner ends -->
  </div>

  <div class="row match-height">
    <!-- Growing Spinner starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Growing Spinner</h4>
        </div>
        <div class="card-body">
          <p class="card-text">Use class <code>.spinner-grow</code> for a growing spinner.</p>
          <div class="spinner-grow" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Growing Spinner ends -->

    <!-- Colored Growing Spinner starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Colored Growing Spinners</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            You can customize the color with text color utilities. You can use any of our text color utilities on the
            standard spinner. Use <code>.text-{color}</code>
          </p>
          <div class="demo-inline-spacing">
            <div class="spinner-grow text-primary me-1" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary me-1" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-success me-1" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-danger me-1" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-warning me-1" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-info me-1" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-light me-1" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Colored Growing Spinner ends -->
  </div>

  <div class="row match-height">
    <!-- Spinner using Flex starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Flex</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Use Flexbox utilities to place spinners.Use <code>.d-flex</code> and <code>.align-items-{side}</code>.
          </p>
          <div class="d-flex justify-content-center my-1">
            <div class="spinner-border" role="status" aria-hidden="true"></div>
          </div>
          <div class="d-flex align-items-center">
            <strong>Loading...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Spinner using Flex ends -->

    <!-- Spinner using Float starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Float</h4>
        </div>
        <div class="card-body">
          <p class="card-text">You can also use Float to place your spinner <code>.float-{side}</code>.</p>
          <div class="clearfix">
            <div class="spinner-border float-end" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Spinner using Float ends -->
  </div>

  <div class="row match-height">
    <!-- Spinner using Text Alignment starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Text Alignment</h4>
        </div>
        <div class="card-body">
          <p class="card-text">You can also use <code>.text-{side}</code> for your spinner's placement.</p>
          <div class="text-center">
            <div class="spinner-border" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Spinner using Text Alignment ends -->

    <!-- Spinner Sizes starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sizes</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Use <code>.spinner-border-sm </code> and <code>.spinner-grow-sm</code> for small sized spinner. For large
            spinner, you need to add inline style.
          </p>
          <div class="demo-inline-spacing">
            <div>
              <div class="spinner-border spinner-border-sm" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow spinner-grow-sm" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
            <div>
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
            <div>
              <div class="spinner-border" style="width: 3rem; height: 3rem" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow" style="width: 3rem; height: 3rem" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Spinner Sizes ends -->
  </div>

  <div class="row match-height">
    <!-- Button Spinner starts -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Buttons</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Use <code>.spinner-border</code> or <code>.spinner-grow</code> inside buttons to indicate an action is
            currently processing or taking place.
          </p>
          <div class="demo-inline-spacing">
            <button class="btn btn-outline-primary" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button class="btn btn-outline-primary" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              <span class="ms-25 align-middle">Loading...</span>
            </button>
            <button class="btn btn-outline-primary" type="button" disabled>
              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button class="btn btn-outline-primary" type="button" disabled>
              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
              <span class="ms-25 align-middle">Loading...</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button Spinner ends -->
  </div>
</section>

<!-- End Of Bootstrap Spinners -->
@endsection
