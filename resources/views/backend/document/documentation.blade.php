<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/codemirror/codemirror.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/codemirror/ambiance.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css" integrity="sha512-uf06llspW44/LZpHzHT6qBOIVODjWtv4MxCricRxkzvopAlSWnTf6hpZTFxuuZcuNE9CBQhqE0Seu1CoRk84nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/pwstabs/jquery.pwstabs.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js" integrity="sha512-8RnEqURPUc5aqFEN04aQEiPlSAdE0jlFS/9iGgUyNtwFnSKCXhmB6ZTNl7LnDtDWKabJIASzXrzD0K+LYexU9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel w-100  documentation">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 doc-header">
                                <a class="btn btn-success btn-sm" href="../template/index.html"><i class="mdi mdi-home me-2"></i>Back to home</a>
                                <h3 class="text-primary mt-4">Documentation</h3>
                            </div>
                        </div>
                        <div class="row doc-content">
                            <div class="col-12 col-md-3 grid-margin doc-table-contents">
                                <div class="card card_document">
                                    <div class="card-body">
                                        <h3 class="mb-4">Table of contents</h3>
                                        <ul class="list-arrow">
                                            <li>
                                                <a href="#doc-intro">Introduction</a>
                                            </li>
                                            <li>
                                                <a href="#doc-started">Getting started</a>
                                            </li>
                                            <li>
                                                <a href="#doc-structure">Basic structure</a>
                                            </li>
                                            <li>
                                                <a href="#doc-components">Components</a>
                                                <ul class="list-arrow">
                                                    <li>
                                                        <a href="#doc-basic-ui">Basic UI Elements</a>
                                                    </li>
                                                    <li>
                                                        <a href="#doc-tables">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="#doc-charts">Charts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#doc-forms">Forms</a>
                                                    </li>
                                                    <li>
                                                        <a href="#doc-icons">Icons</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#doc-credits">Credits</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12 col-md-9 offset-md-3 grid-margin">
                                <div class="col-12 grid-margin" id="doc-intro">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="mb-4">Introduction</h3>
                                            <p>Star Admin2 is a responsive HTML template that is based on the CSS framework Bootstrap 5 and it is built with Sass. Sass compiler makes it easier to code and customize. If you are unfamiliar with Bootstrap or Sass, visit their website and read through the documentation. All of Bootstrap components have been modified to fit the style of Star Admin2 and provide a consistent look throughout the template.</p>
                                            <p>Before you start working with the template, we suggest you go through the pages that are bundled with the theme. Most of the template example pages contain quick tips on how to create or use a component which can be really helpful when you need to create something on the fly.</p>
                                            <p class="d-inline"><strong>Note</strong>: We are trying our best to document how to use the template. If you think that something is missing from the documentation, please do not hesitate to tell us about it. If you have any questions or issues regarding this theme please use Envato support form on our profile or email us at <a class="d-inline text-info" href="mailto:support@bootstrapdash.com">support@bootstrapdash.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 grid-margin" id="doc-started">
                                    <div class="card ">
                                        <div class="card-body">
                                            <h3 class="mb-4">Getting started</h3>
                                            <p>You can directly use the compiled and ready-to-use the version of the template. But in case you plan to customize the template extensively the template allows you to do so.</p>
                                            <p>Within the download you'll find the following directories and files, logically grouping common assets and providing both compiled and minified variations:</p>
                                            <textarea class="shell-mode">
                                                Star Admin 2 pro/ ├── template/ ├── css/ ├── fonts/ ├── images/ ├── js/ ├── pages/ ├── partials/ ├── index.html ├── scss/ ├── vendors/ ├── gulpfile.js ├── index.html ├── package.json ├── docs/ ├── documentation.html ├── documentation.js ├── CHANGELOG.md</textarea>
                                            <p class="mt-1">Note: The root folder denoted further in this documentation refers to the 'template' folder inside the downloaded folder</p>
                                            <div class="alert alert-success mt-4 d-flex align-items-center" role="alert">
                                                <i class="ti-info-alt"></i>
                                                <p>We have bundled up the vendor files needed for demo purpose into a folder 'vendors', you may not need all those vendors in your application. If you want to make any change in the vendor package files, you need to change the src path for related tasks in the file gulpfile.js and run the task <code>bundleVendors</code> to rebuild the vendor files.</p>
                                            </div>
                                            <hr class="mt-5">
                                            <h4 class="mt-4">Installation</h4>
                                            <p class="mb-0">
                                                You need to install package files/Dependencies for this project if you want to customize it. To do this, you must have <span class="fw-bold">node and npm</span> installed in your computer.
                                            </p>
                                            <p class="mb-0">Installation guide of the node can be found <a href="https://nodejs.org/en/">here</a>. As npm comes bundled with a node, a separate installation of npm is not needed.</p>
                                            <p>
                                                If you have installed them, just go to the root folder and run the following command in your command prompt or terminal (for the mac users).
                                            </p>
                                            <textarea class="shell-mode">npm install</textarea>
                                            <p class="mt-4">
                                                This will install the dev dependencies in the local <span class="fw-bold">node_modules</span> folder in your root directory.
                                            </p>
                                            <p class="mt-2">
                                                Then you will need to install <span class="fw-bold">Gulp</span>. We use the Gulp task manager for the development processes. Gulp will watch for changes to the SCSS files and automatically compile the files to CSS.
                                            </p>
                                            <p>Getting started with Gulp is pretty simple. The <a href="https://gulpjs.com/" target="_blank">Gulp</a> site is a great place to get information on installing Gulp if you need more information. You need to first install Gulp-cli in your machine using the below command.</p>
                                            <textarea class="shell-mode">npm install -g gulp-cli</textarea>
                                            <p class="mt-4">This installs Gulp-cli globally to your machine. The other thing that Gulp requires, which, is really what does all the work, is the gulpfile.js. In this file, you set up all of your tasks that you will run.</p>
                                            <p>Don't worry. We have this file already created for you!</p>
                                            <p>To run this project in development mode enter the following command below. This will start the file watch by gulp and whenever a file is modified, the SCSS files will be compiled to create the CSS file.</p>
                                            <textarea class="shell-mode">gulp serve</textarea>
                                            <div class="alert alert-warning mt-4" role="alert">
                                                <i class="ti-info-alt-outline"></i>It is important to run <code>gulp serve</code> command from the directory where the gulpfile.js is located.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 grid-margin" id="doc-structure">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3>Basic structure</h3>
                                            <p class="mb-5">
                                                The below snippet shows the basic HTML structure of Star Admin2 . Please note that all the stylesheets and script files in the below snippet should be included to render Star Admin2 styles.
                                            </p>
                                            <div class="demo-tabs">
                                                <div data-pws-tab="vertical light" data-pws-tab-name="Vertical light">
                                                    <p class="mb-5">This section contains code of default vertical layout. For other layouts in vertical mode like boxed, icon-menu etc., you can follow the snippet same as below, but you have to just add the appropriate optional class to the body. More details of the classes are given in <a href="#doc-options">Options</a> section</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 grid-margin" id="doc-components">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- New Docs Starts Here -->
                                            <h3 class="my-4">Components</h3>
                                            <hr class="hr" id="doc-basic-ui">
                                            <h4 class="my-4">Basic UI Elements</h4>
                                            <div class="demo-tabs">
                                                <!-- Tabs Starts -->
                                                <div data-pws-tab="Button" data-pws-tab-name="Button">
                                                    <h5 class="mb-2 mt-4">Button with the single color</h5>
                                                    <div class="fluid-container py-4">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-success">Success</button>
                                                        <button type="button" class="btn btn-info">Info</button>
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-danger">Danger</button>
                                                    </div>
                                                    <textarea class="multiple-codes">
                                                        <div class="row">
                                                            <button type="button" class="btn btn-primary">Primary</button>
                                                            <button type="button" class="btn btn-secondary">Secondary</button>
                                                            <button type="button" class="btn btn-success">Success</button>
                                                            <button type="button" class="btn btn-info">Info</button>
                                                            <button type="button" class="btn btn-warning">Warning</button>
                                                            <button type="button" class="btn btn-danger">Danger</button>
                                                        </div>
                                                    </textarea>
                                                    <h5 class="mb-2 mt-4">Outlined</h5>
                                                    <div class="fluid-container py-4">
                                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-outline-success">Success</button>
                                                        <button type="button" class="btn btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                                    </div>
                                                    <textarea class="multiple-codes">
                                                        <div class="row">
                                                            <button type="button" class="btn btn-outline-primary">Primary</button>
                                                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                            <button type="button" class="btn btn-outline-success">Success</button>
                                                            <button type="button" class="btn btn-outline-info">Info</button>
                                                            <button type="button" class="btn btn-outline-warning">Warning</button>
                                                            <button type="button" class="btn btn-outline-danger">Danger</button>
                                                        </div>
                                                    </textarea>
                                                    <h5 class="mb-2 mt-4">Sizes</h5>
                                                    <div class="fluid-container py-4">
                                                        <button type="button" class="btn btn-primary btn-lg">Large</button>
                                                        <button type="button" class="btn btn-primary">Medium</button>
                                                        <button type="button" class="btn btn-primary btn-sm">Small</button>
                                                    </div>
                                                    <textarea class="multiple-codes">
                                                        <div class="row">
                                                            <button type="button" class="btn btn-primary btn-lg">Small</button>
                                                            <button type="button" class="btn btn-secondary">Medium</button>
                                                            <button type="button" class="btn btn-success btn-sm">Large</button>
                                                        </div>
                                                    </textarea>
                                                </div>
                                                <!-- Tabs Ends -->
                                                <!-- Tabs Starts -->
                                                <div data-pws-tab="Dropdown" data-pws-tab-name="Dropdown">
                                                    <h5 class="mb-2 mt-4">Bootstrap Dropdown</h5>
                                                    <div class="fluid-container py-4">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <textarea class="multiple-codes">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </textarea>
                                                    <h5 class="mb-2 mt-4">Dropdown Outlined</h5>
                                                    <div class="fluid-container py-4">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <textarea class="multiple-codes">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </textarea>
                                                </div>
                                                <!-- Tabs Ends -->
                                            </div>
                                            <!-- demo-tabs container ends -->

                                            <!-- New Docs Ends Here -->
                                            <!--Tables starts-->
                                            <hr class="hr" id="doc-tables">
                                            <h4 class="my-4">Tables</h4>
                                            <div class="demo-tabs">
                                                <!-- Basic table starts -->
                                                <div data-pws-tab="basic-table" data-pws-tab-name="Basic table">
                                                    <p>
                                                        To create a basic Twitter Bootstrap table, add the following code.
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <table class="table">
                                                            <thead>
                                                                <tr class="">
                                                                    <th>#</th>
                                                                    <th>First Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>Username</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td scope="row">1</td>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">2</td>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">3</td>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </textarea>
                                                </div>
                                                <!-- Basic table Ends -->
                                                <!-- bootstrap-table Starts -->
                                                <div data-pws-tab="bootstrap-table" data-pws-tab-name="Bootstrap table">
                                                    <p>
                                                        <a href="http://bootstrap-table.wenzhixin.net.cn/">Bootstrap-table</a> is an extended Bootstrap table with radio, checkbox, sort, pagination, and other added features.
                                                    </p>
                                                    <h4 class="mt-5 mb-4">Usage</h4>
                                                    <p>
                                                        To use Bootstrap-table in your application, include the following files in &lt;head&gt;.
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <link rel="stylesheet" href="path-to/node_modules/bootstrap-table/dist/bootstrap-table.min.css" />
                                                    </textarea>
                                                    <p>
                                                        Add the following script files in &lt;body&gt;.
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <script src="path-to/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
                                                    </textarea>
                                                    <p>
                                                        Activate Bootstrap table without writing JavaScript, set data-bs-toggle="table" on a normal table.
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <table data-bs-toggle="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Item ID</th>
                                                                    <th>Item Name</th>
                                                                    <th>Item Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Item 1</td>
                                                                    <td>$1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Item 2</td>
                                                                    <td>$2</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </textarea>
                                                </div>
                                                <!-- Bootstrap-table Ends -->
                                            </div>
                                            <!--Tables ends-->

                                            <!-- New Docs Starts Here -->
                                            <!-- New Docs Ends Here -->
                                            <hr class="hr" id="doc-charts">
                                            <h4 class="my-4">Charts</h4>
                                            <div class="demo-tabs">
                                                <div data-pws-tab="anynameyouwant1" data-pws-tab-name="Chart.js">
                                                    <p>
                                                        <a href="http://www.chartjs.org/">Chart.js</a> is a simple yet flexible JavaScript charting for designers & developers.
                                                    </p>
                                                    <h4 class="mt-5 mb-4">Usage</h4>
                                                    <p>
                                                        To use Chart.js in your application, include the following files in &lt;head&gt;.
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <link rel="stylesheet" href="path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
                                                    </textarea>
                                                    <p>
                                                        and the following script files in &lt;body&gt;.
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <script src="path-to/node_modules/chart.js/dist/Chart.min.js"></script>
                                                    </textarea>
                                                    <p>
                                                        To create a simple chart, add the following code:
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <canvas id="lineChart" height="250"></canvas>

                                                        <script>
                                                            var data = {
                                                                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                                                                datasets: [{
                                                                    label: '# of Votes',
                                                                    data: [12, 19, 3, 5, 2, 3],
                                                                    backgroundColor: [
                                                                        'rgba(255, 99, 132, 0.2)',
                                                                        'rgba(54, 162, 235, 0.2)',
                                                                        'rgba(255, 206, 86, 0.2)',
                                                                        'rgba(75, 192, 192, 0.2)',
                                                                        'rgba(153, 102, 255, 0.2)',
                                                                        'rgba(255, 159, 64, 0.2)'
                                                                    ],
                                                                    borderColor: [
                                                                        'rgba(255,99,132,1)',
                                                                        'rgba(54, 162, 235, 1)',
                                                                        'rgba(255, 206, 86, 1)',
                                                                        'rgba(75, 192, 192, 1)',
                                                                        'rgba(153, 102, 255, 1)',
                                                                        'rgba(255, 159, 64, 1)'
                                                                    ],
                                                                    borderWidth: 1
                                                                }]
                                                            };
                                                            var options = {
                                                                scales: {
                                                                    yAxes: [{
                                                                        ticks: {
                                                                            beginAtZero: true
                                                                        }
                                                                    }]
                                                                },
                                                                legend: {
                                                                    display: false
                                                                },
                                                                elements: {
                                                                    point: {
                                                                        radius: 0
                                                                    }
                                                                }

                                                            };
                                                            if ($("#lineChart").length) {
                                                                var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
                                                                var lineChart = new Chart(lineChartCanvas, {
                                                                    type: 'line',
                                                                    data: data,
                                                                    options: options
                                                                });
                                                            }
                                                        </script>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <!--Forms starts-->
                                            <hr class="hr" id="doc-forms">
                                            <h4 class="my-4">Forms</h4>
                                            <div class="demo-tabs">
                                                <!-- Basic elements Starts -->
                                                <div data-pws-tab="basic-elements" data-pws-tab-name="Basic elements">
                                                    <p>
                                                        The basic form elements can be added to your application as below:
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <form class="forms-sample">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                                <small id="emailHelp" class="form-text text-muted text-success"><span class="fa fa-info mt-1"></span>&nbsp; We'll never share your email with anyone else.</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Password</label>
                                                                <input type="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleTextarea">Example textarea</label>
                                                                <textarea class="form-control p-input" id="exampleTextarea" rows="3">&lt;/textarea&gt;
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">File input</label>
                                                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                            </div>
                                                            <fieldset class="form-group">
                                                                <legend class="mb-4 mt-5">Radio buttons</legend>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option one is this and that&mdash;be sure to include why it's great
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one
                                                                    </label>
                                                                </div>
                                                                <div class="form-check disabled">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled> Option three is disabled
                                                                    </label>
                                                                </div>
                                                            </fieldset>
                                                            <div class="form-check col-12">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"> Check me out
                                                                </label>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                        </textarea>
                                                </div>
                                                <!-- Basic elements Ends -->
                                            </div>
                                            <!--Forms ends-->
                                            <!--Icons starts-->
                                            <hr class="hr" id="doc-icons">
                                            <h4 class="my-4">Icons</h4>
                                            <div class="demo-tabs">
                                                <!-- MDI icon Starts -->
                                                <div data-pws-tab="mdi-icon" data-pws-tab-name="Material Icons">
                                                    <p>
                                                        <a href="https://materialdesignicons.com/">Material Design Icons</a> growing icon collection allows designers and developers targeting various platforms to download icons in the format, color and size they need for any project.
                                                    </p>
                                                    <h4 class="mt-5 mb-4">Usage</h4>
                                                    <p>
                                                        To use Material Design Icons in your application, include the following files in &lt;head&gt;.
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <link rel="stylesheet" href="path-to/node_modules/mdi/css/materialdesignicons.min.css" />
                                                    </textarea>
                                                    <p>
                                                        To generate an icon, add the following code:
                                                    </p>
                                                    <textarea class="multiple-codes">
                                                        <i class="ti-bell"></i>
                                                    </textarea>
                                                </div>
                                                <!-- MDI icon Ends -->
                                            </div>
                                            <!--icons ends-->

                                            <!-- New Docs Ends Here -->

                                            <!-- New Docs Ends Here -->

                                        </div>
                                        <!-- Card Block Ends Here -->
                                    </div>
                                </div>
                                <div class="col-12 grid-margin doc-credits" id="doc-credits">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="my-4">Credits</h3>
                                            <p>We have used the following plugins in Star Admin2 </p>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <ul class="list-ticked">
                                                        <li>
                                                            Ace editor <a href="https://ace.c9.io/" target="_blank">https://ace.c9.io/</a>
                                                        </li>
                                                        <li>
                                                            Bootstrap <a href="https://getbootstrap.com/" target="_blank">https://getbootstrap.com/</a>
                                                        </li>
                                                        <li>
                                                            Bootstrap Datepicker <a href="https://gitter.im/uxsolutions/bootstrap-datepicker" target="_blank">https://gitter.im/uxsolutions/bootstrap-datepicker</a>
                                                        </li>
                                                        <li>
                                                            Bootstrap Maxlength <a href="http://mimo84.github.com/bootstrap-maxlength" target="_blank">http://mimo84.github.com/bootstrap-maxlength</a>
                                                        </li>
                                                        <li>
                                                            C3 <a href="https://travis-ci.org/c3js/c3" target="_blank">https://travis-ci.org/c3js/c3</a>
                                                        </li>
                                                        <li>
                                                            Chart.js <a href="https://www.chartjs.org/" target="_blank">https://www.chartjs.org/</a>
                                                        </li>
                                                        <li>
                                                            Chartist <a href="https://gionkunz.github.io/chartist-js/" target="_blank">https://gionkunz.github.io/chartist-js/</a>
                                                        </li>
                                                        <li>
                                                            Clipboard <a href="https://clipboardjs.com" target="_blank">https://clipboardjs.com</a>
                                                        </li>
                                                        <li>
                                                            Codemirror <a href="https://codemirror.net/" target="_blank">https://codemirror.net/</a>
                                                        </li>
                                                        <li>
                                                            Colcade <a href="https://github.com/desandro/colcade" target="_blank">https://github.com/desandro/colcade/</a>
                                                        </li>
                                                        <li>
                                                            D3 <a href="https://d3js.org" target="_blank">https://d3js.org</a>
                                                        </li>
                                                        <li>
                                                            Datatables.net <a href="https://datatables.net/" target="_blank">https://datatables.net/</a>
                                                        </li>
                                                        <li>
                                                            Dragula <a href="https://bevacqua.github.io/dragula/" target="_blank">https://bevacqua.github.io/dragula/</a>
                                                        </li>
                                                        <li>
                                                            Dropify <a href="http://jeremyfagis.github.io/dropify/" target="_blank">http://jeremyfagis.github.io/dropify/</a>
                                                        </li>
                                                        <li>
                                                            Dropzone <a href="http://www.dropzonejs.com/" target="_blank">http://www.dropzonejs.com/</a>
                                                        </li>
                                                        <li>
                                                            Flag icons <a href="http://lipis.github.io/flag-icon-css/" target="_blank">http://lipis.github.io/flag-icon-css/</a>
                                                        </li>
                                                        <li>
                                                            Flot <a href="https://www.flotcharts.org/" target="_blank">https://www.flotcharts.org/</a>
                                                        </li>
                                                        <li>
                                                            Font awesome <a href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a>
                                                        </li>
                                                        <li>
                                                            Full calendar <a href="https://fullcalendar.io/" target="_blank">https://fullcalendar.io/</a>
                                                        </li>
                                                        <li>
                                                            Gulp <a href="https://gulpjs.com/" target="_blank">https://gulpjs.com/</a>
                                                        </li>
                                                        <li>
                                                            Icheck <a href="http://icheck.fronteed.com/" target="_blank">http://icheck.fronteed.com/</a>
                                                        </li>
                                                        <li>
                                                            Inputmask <a href="http://robinherbots.github.io/Inputmask/" target="_blank">http://robinherbots.github.io/Inputmask/</a>
                                                        </li>
                                                        <li>
                                                            Ion range slider <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">http://ionden.com/a/plugins/ion.rangeSlider/en.html</a>
                                                        </li>
                                                        <li>
                                                            JQuery <a href="https://jquery.com/" target="_blank">https://jquery.com/</a>
                                                        </li>
                                                        <li>
                                                            JQuery asColorPicker <a href="https://github.com/thecreation/jquery-asColorPicker" target="_blank">https://github.com/thecreation/jquery-asColorPicker</a>
                                                        </li>
                                                        <li>
                                                            JQuery bar rating <a href="http://antenna.io/demo/jquery-bar-rating/examples/" target="_blank">http://antenna.io/demo/jquery-bar-rating/examples/</a>
                                                        </li>
                                                        <li>
                                                            JQuery context menu <a href="http://swisnl.github.io/jQuery-contextMenu/" target="_blank">http://swisnl.github.io/jQuery-contextMenu/</a>
                                                        </li>
                                                        <li>
                                                            JQuery file upload <a href="http://hayageek.com/docs/jquery-upload-file.php" target="_blank">http://hayageek.com/docs/jquery-upload-file.php</a>
                                                        </li>
                                                        <li>
                                                            JQuery Mapael <a href="https://github.com/neveldo/mapael-maps" target="_blank">https://github.com/neveldo/mapael-maps</a>
                                                        </li>
                                                        <li>
                                                            JQuery sparklin <a href="http://omnipotent.net/jquery.sparkline/" target="_blank">http://omnipotent.net/jquery.sparkline/</a>
                                                        </li>
                                                        <li>
                                                            JQuery-steps <a href="http://www.jquery-steps.com/" target="_blank">http://www.jquery-steps.com/</a>
                                                        </li>
                                                        <li>
                                                            JQuery Tags Input <a href="http://xoxco.com/projects/code/tagsinput/" target="_blank">http://xoxco.com/projects/code/tagsinput/</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <ul class="list-ticked">
                                                        <li>
                                                            JQuery Toast <a href="https://kamranahmed.info/toast" target="_blank">https://kamranahmed.info/toast</a>
                                                        </li>
                                                        <li>
                                                            JQuery Validation <a href="https://jqueryvalidation.org/" target="_blank">https://jqueryvalidation.org/</a>
                                                        </li>
                                                        <li>
                                                            JQuery Avgrund <a href="https://github.com/voronianski/jquery.avgrund.js" target="_blank">https://github.com/voronianski/jquery.avgrund.js</a>
                                                        </li>
                                                        <li>
                                                            JQuery Repeater <a href="http://briandetering.net/repeater" target="_blank">http://briandetering.net/repeater</a>
                                                        </li>
                                                        <li>
                                                            JSgrid <a href="http://js-grid.com/" target="_blank">http://js-grid.com/</a>
                                                        </li>
                                                        <li>
                                                            JSgrid <a href="http://js-grid.com/" target="_blank">http://js-grid.com/</a>
                                                        </li>
                                                        <li>
                                                            Justgage <a href="http://justgage.com/" target="_blank">http://justgage.com/</a>
                                                        </li>
                                                        <li>
                                                            JVector Map <a href="http://jvectormap.com/" target="_blank">http://jvectormap.com/</a>
                                                        </li>
                                                        <li>
                                                            Light gallery <a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">http://sachinchoolur.github.io/lightGallery/</a>
                                                        </li>
                                                        <li>
                                                            Material Design Icons <a href="https://materialdesignicons.com/" target="_blank">https://materialdesignicons.com/</a>
                                                        </li>
                                                        <li>
                                                            Moment.js <a href="https://momentjs.com/" target="_blank">https://momentjs.com/</a>
                                                        </li>
                                                        <li>
                                                            Morris.js <a href="https://momentjs.com/" target="_blank">https://momentjs.com/</a>
                                                        </li>
                                                        <li>
                                                            NoUISlider <a href="https://refreshless.com/nouislider/" target="_blank">https://refreshless.com/nouislider/</a>
                                                        </li>
                                                        <li>
                                                            Owl carousel <a href="https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html" target="_blank">https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html</a>
                                                        </li>
                                                        <li>
                                                            Perfect scrollbar <a href="http://utatti.github.io/perfect-scrollbar/" target="_blank">http://utatti.github.io/perfect-scrollbar/</a>
                                                        </li>
                                                        <li>
                                                            Popper.js <a href="https://popper.js.org/" target="_blank">https://popper.js.org/</a>
                                                        </li>
                                                        <li>
                                                            Progressbar.js <a href="https://progressbarjs.readthedocs.io/en/latest/" target="_blank">https://progressbarjs.readthedocs.io</a>
                                                        </li>
                                                        <li>
                                                            PWS Tabs <a href="https://alexchizhov.com/pwstabs/" target="_blank">https://alexchizhov.com/pwstabs/</a>
                                                        </li>
                                                        <li>
                                                            Quill Editor <a href="https://quilljs.com/" target="_blank">https://quilljs.com/</a>
                                                        </li>
                                                        <li>
                                                            Rapheal <a href="http://dmitrybaranovskiy.github.io/raphael/" target="_blank">http://dmitrybaranovskiy.github.io/raphael/</a>
                                                        </li>
                                                        <li>
                                                            Select 2 <a href="https://select2.org/" target="_blank">https://select2.org/</a>
                                                        </li>
                                                        <li>
                                                            Simple line icons <a href="http://simplelineicons.com/" target="_blank">http://simplelineicons.com/</a>
                                                        </li>
                                                        <li>
                                                            SimpleMDE <a href="https://simplemde.com/" target="_blank">https://simplemde.com/</a>
                                                        </li>
                                                        <li>
                                                            Summernote <a href="https://summernote.org/" target="_blank">https://summernote.org/</a>
                                                        </li>
                                                        <li>
                                                            Sweetalert <a href="http://sweetalert.js.org" target="_blank">http://sweetalert.js.org</a>
                                                        </li>
                                                        <li>
                                                            Tempusdominus-bootstrap-4 <a href="https://tempusdominus.github.io/bootstrap-4/" target="_blank">https://tempusdominus.github.io/bootstrap-4/</a>
                                                        </li>
                                                        <li>
                                                            Themify icons <a href="https://themify.me/themify-icons" target="_blank">https://themify.me/themify-icons</a>
                                                        </li>
                                                        <li>
                                                            TinyMCE <a href="https://www.tiny.cloud/" target="_blank">https://www.tiny.cloud/</a>
                                                        </li>
                                                        <li>
                                                            TWBS pagination <a href="https://esimakin.github.io/twbs-pagination/" target="_blank">https://esimakin.github.io/twbs-pagination/</a>
                                                        </li>
                                                        <li>
                                                            Typeahead <a href="https://twitter.github.io/typeahead.js/" target="_blank">https://twitter.github.io/typeahead.js/</a>
                                                        </li>
                                                        <li>
                                                            Xeditable <a href="https://vitalets.github.io/x-editable/" target="_blank">https://vitalets.github.io/x-editable/</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('backend/assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('backend/assets/js/template.js')}}"></script>
    <script src="{{ asset('backend/assets/js/settings.js')}}"></script>
    <script src="{{ asset('backend/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('backend/assets/js/codeEditor.js')}}"></script>
    <script src="{{ asset('backend/assets/js/tabs.js')}}"></script>
    <script src="{{ asset('backend/assets/js/tooltips.js')}}"></script>
    <!-- <script src="{{ asset('backend/assets/js/documentation.js')}}"></script> -->
    <!-- End custom js for this page-->
</body>

</html>