
    @extends('layouts.app')

    @section('content')
      <div class="container-fluid">
            <div class="animated fadeIn">
                 <div class="row">
                    <div class="row">
                        <div class="col-12  col-xl-9 ">
                        <div class="card">
                        <div class="card-body">
                        <h1 class="docs-title" id="content">CoreUI UI Kit</h1>
                        <p class="docs-lead">Documentation and examples for CoreUI Base styles, including colors, typography, and more.</p>
                        <div class="sharethis-inline-share-buttons my-3 st-center st-has-labels  st-inline-share-buttons st-animated" id="st-1"><div class="st-total ">
                          <span class="st-label">56</span>
                          <span class="st-shares">
                            Shares
                          </span>
                        </div><div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
                          <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
                          <span class="st-label">Share</span>
                        </div><div class="st-btn" data-network="twitter" style="display: inline-block;">
                          <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
                          <span class="st-label">Tweet</span>
                        </div><div class="st-btn" data-network="messenger" style="display: inline-block;">
                          <img alt="messenger sharing button" src="https://platform-cdn.sharethis.com/img/messenger.svg">
                          <span class="st-label">Share</span>
                        </div><div class="st-btn" data-network="reddit" style="display: inline-block;">
                          <img alt="reddit sharing button" src="https://platform-cdn.sharethis.com/img/reddit.svg">
                          <span class="st-label">Share</span>
                        </div><div class="st-btn" data-network="vk" style="display: inline-block;">
                          <img alt="vk sharing button" src="https://platform-cdn.sharethis.com/img/vk.svg">
                          <span class="st-label">Share</span>
                        </div><div class="st-btn" data-network="email" style="display: inline-block;">
                          <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">
                          <span class="st-label">Email</span>
                        </div><div class="st-btn st-last" data-network="sharethis" style="display: inline-block;">
                          <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">
                          <span class="st-label">Share</span>
                        </div></div>
                        <h2 id="color-pallete">Color pallete</h2>
                        <p>We use a subset of all colors to create a smaller color palette for generating color schemes, also available as Sass variables and a Sass map in <code class="highlighter-rouge">scss/_bootstrap-variables.scss</code> file.</p>
                        <div class="row">
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-primary w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Primary Color</h6>
                        <table class="w-100">
                        <tbody><tr>
                        <td class="text-muted">HEX:</td><td class="font-weight-bold">#20a8d8</td>
                        </tr>
                        <tr>
                        <td class="text-muted">RGB:</td><td class="font-weight-bold">#20a8d8</td>
                        </tr>
                        <tr>
                        <td class="text-muted">CMYK:</td><td class="font-weight-bold">#20a8d8</td>
                        </tr>
                        <tr>
                        <td class="text-muted">CSS:</td><td class="font-weight-bold">--primary</td>
                        </tr>
                        </tbody></table>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-secondary w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Secondary Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#a4b7c1</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-success w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Success Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#4dbd74</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-danger w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Danger Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#f86c6b</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-warning w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Warning Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#ffc107</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-info w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Info Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#63c2de</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-light w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Light Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#f0f3f5</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-dark w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Dark Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#29363d</strong>
                        </div>
                        </div>
                        <h2 id="grays">Grays</h2>
                        <p>An expansive set of gray variables and a Sass map in <code class="highlighter-rouge">scss/_bootstrap-variables.scss</code> for consistent shades of gray across your project.</p>
                        <div class="row mb-3">
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-100 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 100 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#f0f3f</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-200 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 200 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#c2cfd6</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-300 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 300 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#a4b7c1</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-400 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 400 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#869fac</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-500 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 500 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#678898</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-600 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 600 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#536c79</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-700 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 700 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#3e515b</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-800 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 800 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#29363d</strong>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="bg-gray-900 w-75 rounded mb-2" style="padding-top:75%"></div>
                        <h6>Gray 900 Color</h6>
                        <span class="text-muted">HEX:</span>
                        <strong>#151b1e</strong>
                        </div>
                        </div>
                        <h2 id="typography">Typography</h2>
                        <p>Typography is used to create clear hierarchies, useful organizations, and purposeful alignments that guide users through the product and experience. It is the core structure of any well designed interface.</p>
                        <div class="row">
                        <div class="col-sm-4 col-6 mb-4">
                        <div class="text-muted mb-3">Heading 1</div>
                        <div class="d-flex align-items-end" style="height:2.625rem">
                        <span class="h1">AaBbCcDd</span>
                        </div>
                        <table class="w-100">
                        <tbody><tr>
                        <td class="text-muted">Font size:</td><td class="font-weight-bold">2.1875rem</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Font weight:</td><td class="font-weight-bold">500</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Line height:</td><td class="font-weight-bold">1.2</td>
                        </tr>
                        </tbody></table>
                        </div>
                        <div class="col-sm-4 col-6 mb-5">
                        <div class="text-muted mb-3">Heading 2</div>
                        <div class="d-flex align-items-end" style="height:2.625rem">
                        <span class="h2">AaBbCcDd</span>
                        </div>
                        <table class="w-100">
                        <tbody><tr>
                        <td class="text-muted">Font size:</td><td class="font-weight-bold">1.75rem</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Font weight:</td><td class="font-weight-bold">500</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Line height:</td><td class="font-weight-bold">1.2</td>
                        </tr>
                        </tbody></table>
                        </div>
                        <div class="col-sm-4 col-6 mb-5">
                        <div class="text-muted mb-3">Heading 3</div>
                        <div class="d-flex align-items-end" style="height:2.625rem">
                        <span class="h3">AaBbCcDd</span>
                        </div>
                        <table class="w-100">
                        <tbody><tr>
                        <td class="text-muted">Font size:</td><td class="font-weight-bold">1.53125rem</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Font weight:</td><td class="font-weight-bold">500</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Line height:</td><td class="font-weight-bold">1.2</td>
                        </tr>
                        </tbody></table>
                        </div>
                        <div class="col-sm-4 col-6 mb-5">
                        <div class="text-muted mb-3">Heading 4</div>
                        <div class="d-flex align-items-end" style="height:1.575rem">
                        <span class="h4">AaBbCcDd</span>
                        </div>
                        <table class="w-100">
                        <tbody><tr>
                        <td class="text-muted">Font size:</td><td class="font-weight-bold">1.3125rem</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Font weight:</td><td class="font-weight-bold">500</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Line height:</td><td class="font-weight-bold">1.2</td>
                        </tr>
                        </tbody></table>
                        </div>
                        <div class="col-sm-4 col-6 mb-4">
                        <div class="text-muted mb-3">Heading 5</div>
                        <div class="d-flex align-items-end" style="height:1.575rem">
                        <span class="h5">AaBbCcDd</span>
                        </div>
                        <table class="w-100">
                        <tbody><tr>
                        <td class="text-muted">Font size:</td><td class="font-weight-bold">1.09375rem</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Font weight:</td><td class="font-weight-bold">500</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Line height:</td><td class="font-weight-bold">1.2</td>
                        </tr>
                        </tbody></table>
                        </div>
                        <div class="col-sm-4 col-6 mb-4">
                        <div class="text-muted mb-3">Heading 6</div>
                        <div class="d-flex align-items-end" style="height:1.575rem">
                        <span class="h6">AaBbCcDd</span>
                        </div>
                        <table class="w-100">
                        <tbody><tr>
                        <td class="text-muted">Font size:</td><td class="font-weight-bold">0.875rem</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Font weight:</td><td class="font-weight-bold">500</td>
                        </tr>
                        <tr>
                        <td class="text-muted">Line height:</td><td class="font-weight-bold">1.2</td>
                        </tr>
                        </tbody></table>
                        </div>
                        </div>
                        <h2 id="bootstrap-alerts">Bootstrap alerts</h2>
                        <p>Bootstrap alerts give contextual feedback information for common user operations. Component is delivered with a bunch of usable and adjustable alert messages.</p>
                        <div class="docs-example mb-5">
                        <div class="alert alert-primary" role="alert">
                        It's primary alert!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                        It's secondary alert!
                        </div>
                        <div class="alert alert-success" role="alert">
                        It's success alert!
                        </div>
                        <div class="alert alert-danger" role="alert">
                        It's danger alert!
                        </div>
                        <div class="alert alert-warning" role="alert">
                        It's warning alert!
                        </div>
                        <div class="alert alert-info" role="alert">
                        It's info alert!
                        </div>
                        <div class="alert alert-light" role="alert">
                        It's light alert!
                        </div>
                        <div class="alert alert-dark" role="alert">
                        It's dark alert!
                        </div>
                        </div>
                        <h2 id="bootstrap-badges">Bootstrap badges</h2>
                        <p>Bootstrap badges are small count and labeling components.</p>
                        <div class="docs-example mb-5">
                        <div class="h1">Heading 1 <span class="badge badge-secondary">Badge</span></div>
                        <div class="h2">Heading 2 <span class="badge badge-secondary">Badge</span></div>
                        <div class="h3">Heading 3 <span class="badge badge-secondary">Badge</span></div>
                        <div class="h4">Heading 4 <span class="badge badge-secondary">Badge</span></div>
                        <div class="h5">Heading 5 <span class="badge badge-secondary">Badge</span></div>
                        <div class="h6">Heading 6 <span class="badge badge-secondary">Badge</span></div>
                        </div>
                        <h2 id="bootstrap-breadcrumb">Bootstrap breadcrumb</h2>
                        <p>Bootstrap breadcrumb navigation component which indicates the current location within a navigational hierarchy that automatically adds separators.</p>
                        <div class="docs-example mb-5">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CoreUI</li>
                        </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item"><a href="#">CoreUI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">CoreUI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>

                        <li class="breadcrumb-menu">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn" href="#"><i class="cui-speech"></i></a>
                        <a class="btn" href="#"><i class="cui-graph"></i> Dashboard</a>
                        <a class="btn" href="#"><i class="cui-settings"></i> Settings</a>
                        </div>
                        </li>
                        </ol>
                        </nav>
                        </div>
                        <h2 id="bootstrap-buttons">Bootstrap buttons</h2>
                        <p>Bootstrap buttons component for actions in tables, forms, cards, and more. Bootstrap 4 provides various styles, states, and size. Ready to use and easy to customize.</p>
                        <h3 id="standard-buttons">Standard buttons</h3>
                        <div class="docs-example mb-4">
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Normal
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-primary">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-secondary">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-success">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-danger">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-warning">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-info">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-light">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-dark">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Active
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-primary active" active="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-secondary active" active="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-success active" active="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-danger active" active="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-warning active" active="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-info active" active="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-light active" active="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-dark active" active="">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Disabled
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-primary" disabled="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-secondary" disabled="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-success" disabled="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-danger" disabled="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-warning" disabled="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-info" disabled="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-light" disabled="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-dark" disabled="">Dark</button>
                        </div>
                        </div>
                        </div>
                        <h3 id="outline-buttons">Outline buttons</h3>
                        <div class="docs-example mb-4">
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Normal
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-primary">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-success">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-danger">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-warning">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-info">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-light">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-dark">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Active
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-primary active" active="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-secondary active" active="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-success active" active="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-danger active" active="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-warning active" active="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-info active" active="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-light active" active="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-dark active" active="">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Disabled
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-primary" disabled="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-secondary" disabled="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-success" disabled="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-danger" disabled="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-warning" disabled="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-info" disabled="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-light" disabled="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-outline-dark" disabled="">Dark</button>
                        </div>
                        </div>
                        </div>
                        <h3 id="ghost-buttons">Ghost buttons</h3>
                        <div class="docs-example mb-4">
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Normal
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-primary">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-secondary">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-success">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-danger">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-warning">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-info">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-light">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-dark">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Active
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-primary active" active="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-secondary active" active="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-success active" active="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-danger active" active="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-warning active" active="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-info active" active="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-light active" active="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-dark active" active="">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Disabled
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-primary" disabled="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-secondary" disabled="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-success" disabled="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-danger" disabled="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-warning" disabled="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-info" disabled="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-light" disabled="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-ghost-dark" disabled="">Dark</button>
                        </div>
                        </div>
                        </div>
                        <h3 id="square-buttons">Square buttons</h3>
                        <div class="docs-example mb-4">
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Normal
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-primary">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-secondary">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-success">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-danger">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-warning">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-info">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-light">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-dark">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Active
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-primary active" active="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-secondary active" active="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-success active" active="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-danger active" active="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-warning active" active="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-info active" active="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-light active" active="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-dark active" active="">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Disabled
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-primary" disabled="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-secondary" disabled="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-success" disabled="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-danger" disabled="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-warning" disabled="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-info" disabled="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-light" disabled="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-square btn-dark" disabled="">Dark</button>
                        </div>
                        </div>
                        </div>
                        <h3 id="pill-buttons">Pill buttons</h3>
                        <div class="docs-example mb-5">
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Normal
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-primary">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-secondary">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-success">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-danger">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-warning">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-info">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-light">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-dark">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Active
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-primary active" active="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-secondary active" active="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-success active" active="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-danger active" active="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-warning active" active="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-info active" active="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-light active" active="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-dark active" active="">Dark</button>
                        </div>
                        </div>
                        <div class="row align-items-center mb-3">
                        <div class="col-12 col-xl mb-3 mb-xl-0">
                        Disabled
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-primary" disabled="">Primary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-secondary" disabled="">Secondary</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-success" disabled="">Success</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-danger" disabled="">Danger</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-warning" disabled="">Warning</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-info" disabled="">Info</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-light" disabled="">Light</button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="button" class="btn btn-block btn-pill btn-dark" disabled="">Dark</button>
                        </div>
                        </div>
                        </div>
                        <h3 id="loading-buttons">Loading buttons</h3>
                        </div>
                        </div>
                        </div>
                        <div class="d-none d-xl-block col-xl-3 toc">
                        <div class="card">
                        <div class="card-body">
                        <ul class="section-nav">
                        <li class="toc-entry toc-h2"><a href="#color-pallete">Color pallete</a></li>
                        <li class="toc-entry toc-h2"><a href="#grays">Grays</a></li>
                        <li class="toc-entry toc-h2"><a href="#typography">Typography</a></li>
                        <li class="toc-entry toc-h2"><a href="#bootstrap-alerts">Bootstrap alerts</a></li>
                        <li class="toc-entry toc-h2"><a href="#bootstrap-badges">Bootstrap badges</a></li>
                        <li class="toc-entry toc-h2"><a href="#bootstrap-breadcrumb">Bootstrap breadcrumb</a></li>
                        <li class="toc-entry toc-h2"><a href="#bootstrap-buttons">Bootstrap buttons</a>
                        <ul>
                        <li class="toc-entry toc-h3"><a href="#standard-buttons">Standard buttons</a></li>
                        <li class="toc-entry toc-h3"><a href="#outline-buttons">Outline buttons</a></li>
                        <li class="toc-entry toc-h3"><a href="#ghost-buttons">Ghost buttons</a></li>
                        <li class="toc-entry toc-h3"><a href="#square-buttons">Square buttons</a></li>
                        <li class="toc-entry toc-h3"><a href="#pill-buttons">Pill buttons</a></li>
                        <li class="toc-entry toc-h3"><a href="#loading-buttons">Loading buttons</a></li>
                        </ul>
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
    @endsection
