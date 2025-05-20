<!DOCTYPE html>
<!-- saved from url=(0036)https://themes.techzaa.in/velonic_r/ -->
<html lang="en" data-bs-theme="light" data-layout-mode="fluid" data-topbar-color="light" data-menu-color="dark"
  data-sidenav-size="default" data-layout-position="fixed">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
    integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="/favicon.ico" type="image/svg+xml" href="/logo.svg" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    Welcome! | Velonic React - Bootstrap 5 Admin &amp; Dashboard Template
  </title>

  <link rel="stylesheet"
    href="./Welcome! _ Velonic React - Bootstrap 5 Admin &amp; Dashboard Template_files/index-0c21f661.css" />

  <style id="apexcharts-css">
    .apexcharts-canvas {
      position: relative;
      user-select: none;
      /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
      border-radius: 4px;
      background-color: rgba(0, 0, 0, 0.5);
      box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
      -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
    }

    .apexcharts-inner {
      position: relative;
    }

    .apexcharts-text tspan {
      font-family: inherit;
    }

    .legend-mouseover-inactive {
      transition: 0.15s ease all;
      opacity: 0.2;
    }

    .apexcharts-series-collapsed {
      opacity: 0;
    }

    .apexcharts-tooltip {
      border-radius: 5px;
      box-shadow: 2px 2px 6px -4px #999;
      cursor: default;
      font-size: 14px;
      left: 62px;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      top: 20px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      white-space: nowrap;
      z-index: 12;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
      border: 1px solid #e3e3e3;
      background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
      color: #fff;
      background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
      font-family: inherit;
    }

    .apexcharts-tooltip-title {
      padding: 6px;
      font-size: 15px;
      margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
      background: #eceff1;
      border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
      background: rgba(0, 0, 0, 0.7);
      border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-y-value,
    .apexcharts-tooltip-text-goals-value,
    .apexcharts-tooltip-text-z-value {
      display: inline-block;
      font-weight: 600;
      margin-left: 5px;
    }

    .apexcharts-tooltip-title:empty,
    .apexcharts-tooltip-text-y-label:empty,
    .apexcharts-tooltip-text-y-value:empty,
    .apexcharts-tooltip-text-goals-label:empty,
    .apexcharts-tooltip-text-goals-value:empty,
    .apexcharts-tooltip-text-z-value:empty {
      display: none;
    }

    .apexcharts-tooltip-text-y-value,
    .apexcharts-tooltip-text-goals-value,
    .apexcharts-tooltip-text-z-value {
      font-weight: 600;
    }

    .apexcharts-tooltip-text-goals-label,
    .apexcharts-tooltip-text-goals-value {
      padding: 6px 0 5px;
    }

    .apexcharts-tooltip-goals-group,
    .apexcharts-tooltip-text-goals-label,
    .apexcharts-tooltip-text-goals-value {
      display: flex;
    }

    .apexcharts-tooltip-text-goals-label:not(:empty),
    .apexcharts-tooltip-text-goals-value:not(:empty) {
      margin-top: -6px;
    }

    .apexcharts-tooltip-marker {
      width: 12px;
      height: 12px;
      position: relative;
      top: 0px;
      margin-right: 10px;
      border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
      padding: 0 10px;
      display: none;
      text-align: left;
      justify-content: left;
      align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
      opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
      padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
      opacity: 0;
      height: 0;
      line-height: 0;
      padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
      padding: 6px 0 5px;
    }

    .apexcharts-tooltip-box,
    .apexcharts-custom-tooltip {
      padding: 4px 8px;
    }

    .apexcharts-tooltip-boxPlot {
      display: flex;
      flex-direction: column-reverse;
    }

    .apexcharts-tooltip-box>div {
      margin: 4px 0;
    }

    .apexcharts-tooltip-box span.value {
      font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
      padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
      font-weight: 600;
      color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
      opacity: 0;
      padding: 9px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #eceff1;
      border: 1px solid #90a4ae;
      transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
      left: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
      bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
      top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
      border-bottom-color: #eceff1;
    }

    .apexcharts-xaxistooltip-bottom:before {
      border-bottom-color: #90a4ae;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
      border-top-color: #eceff1;
    }

    .apexcharts-xaxistooltip-top:before {
      border-top-color: #90a4ae;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
      opacity: 0;
      padding: 4px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #eceff1;
      border: 1px solid #90a4ae;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
      top: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
      left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
      right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
      border-left-color: #eceff1;
    }

    .apexcharts-yaxistooltip-left:before {
      border-left-color: #90a4ae;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
      border-right-color: #eceff1;
    }

    .apexcharts-yaxistooltip-right:before {
      border-right-color: #90a4ae;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
      opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
      display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
      pointer-events: none;
      opacity: 0;
      transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
      opacity: 0;
    }

    .apexcharts-selection-rect {
      cursor: move;
    }

    .svg_select_boundingRect,
    .svg_select_points_rot {
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_boundingRect,
    .apexcharts-selection-rect+g .svg_select_points_rot {
      opacity: 0;
      visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_points_l,
    .apexcharts-selection-rect+g .svg_select_points_r {
      cursor: ew-resize;
      opacity: 1;
      visibility: visible;
    }

    .svg_select_points {
      fill: #efefef;
      stroke: #333;
      rx: 2;
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
      cursor: crosshair;
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-pan {
      cursor: move;
    }

    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
      cursor: pointer;
      width: 20px;
      height: 20px;
      line-height: 24px;
      color: #6e8192;
      text-align: center;
    }

    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
      fill: #6e8192;
    }

    .apexcharts-selection-icon svg {
      fill: #444;
      transform: scale(0.76);
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
      fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
      fill: #008ffb;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
      fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
      position: relative;
    }

    .apexcharts-reset-icon {
      margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
      transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
      transform: scale(0.7);
    }

    .apexcharts-zoomout-icon {
      margin-right: 3px;
    }

    .apexcharts-pan-icon {
      transform: scale(0.62);
      position: relative;
      left: 1px;
      top: 0px;
    }

    .apexcharts-pan-icon svg {
      fill: #fff;
      stroke: #6e8192;
      stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
      stroke: #008ffb;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
      stroke: #333;
    }

    .apexcharts-toolbar {
      position: absolute;
      z-index: 11;
      max-width: 176px;
      text-align: right;
      border-radius: 3px;
      padding: 0px 6px 2px 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .apexcharts-menu {
      background: #fff;
      position: absolute;
      top: 100%;
      border: 1px solid #ddd;
      border-radius: 3px;
      padding: 3px;
      right: 10px;
      opacity: 0;
      min-width: 110px;
      transition: 0.15s ease all;
      pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
      opacity: 1;
      pointer-events: all;
      transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
      padding: 6px 7px;
      font-size: 12px;
      cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
      background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
    }

    @media screen and (min-width: 768px) {
      .apexcharts-canvas:hover .apexcharts-toolbar {
        opacity: 1;
      }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
      cursor: default;
      pointer-events: none;
    }

    .apexcharts-pie-label-delay {
      opacity: 0;
      animation-name: opaque;
      animation-duration: 0.3s;
      animation-fill-mode: forwards;
      animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
      opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect,
    .apexcharts-xaxis-annotation-label,
    .apexcharts-yaxis-annotation-label,
    .apexcharts-point-annotation-label,
    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line,
    .apexcharts-zoom-rect,
    .apexcharts-toolbar svg,
    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
      pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
      transition: 0.15s ease all;
    }

    @keyframes opaque {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    /* Resize generated styles */

    @keyframes resizeanim {
      from {
        opacity: 0;
      }

      to {
        opacity: 0;
      }
    }

    .resize-triggers {
      animation: 1ms resizeanim;
      visibility: hidden;
      opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
      content: " ";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    .resize-triggers>div {
      background: #eee;
      overflow: auto;
    }

    .contract-trigger:before {
      width: 200%;
      height: 200%;
    }

    #TableCon {
      padding-top: 20px;
    }

    #tableTitle {
      font-size: 30px
    }

    #formDesign {
      display: flex;
      flex-direction: row;
    }

    #cInput {
      position: absolute;
      z-index: 10;
      top: 50px;
      left: 50px;
      background: red;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</head>

<body>
  <div id="root">
    <div class="wrapper">
      <div class="navbar-custom">
        <?php
        include './header.php';
        ?>
      </div>
      <div class="leftside-menu">
        <a class="logo logo-light"><span class="logo-lg"><img
              src="./Welcome! _ Velonic React - Bootstrap 5 Admin &amp; Dashboard Template_files/logo-3711f1d8.png"
              alt="logo" /></span><span class="logo-sm"><img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAYCAYAAAB0kZQKAAABtUlEQVR4Ac2V3XGCQBDHdw/Nsx3EDvKWSQYjWIF2AB3EDsQKYioQOzAVgB9jfEsJagXxORPZ7GU0gwpyh8HkP7N83e3+f8DCAfwDIeSUHQSVD1F6RIJWhOBjSQxnprmCHNKGuAuCqoFGhw9bnF7ZXSegJSIMqWT0dGGUIW4nk5vyhtqc4mbNZSAfyoanCpMJcT8eWyJCjw9t0JQqDBZhrguDRZonKIwEea/1+igRomDzI5gNRv7csgbyRMiN/NxEJNwLAXxbGiRc2ezyZO911IKJTQidgmFC/rd0p42HcHchsTHN0dThbvK4papQoPlJiF+GSTVXgjgHhgCXILA9q5svWXOPIIjI4l2PY8jhI+JKB0aa81riza3aIKEu5/KTQewmQvAkuQ7IpmzHxpcykZN+Csq1Q4iSgyR/33swa27q3lX0+Rw2GusEczs2N+RwdzeIMYA3jnhRyIIxsMzQ1NIwP6xpx5+0TLI5FnRai23xVMlxjiCjjhy3TxVxFGD6HNc5zBccTVCVBkxT0dyBvOLkDmXDpOl9m1+Bc8VFqttilzdPgen/ibkizGXMU2Ce6OBL0dUXGGdxXMa328oAAAAASUVORK5CYII="
              alt="small logo" /></span></a>
        <?php
        include './navbar.php'
          ?>
      </div>
      <div class="content-page">
        <div class="content" id="TableCon">
          <div class="container-fluid">
            <div class="row">
              <div class="card">
                <div class="card-header">
                  <h4 class="header-title" id="tableTitle">Activation History</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="usersTable" role="table" class="table table-centered react-table">
                      <thead>
                        <tr role="row">
                          <th colspan="1" role="columnheader" title="Toggle SortBy" class="sortable"
                            style="cursor: pointer">
                            id
                          </th>
                          <th colspan="1" role="columnheader" title="Toggle SortBy" class="sortable"
                            style="cursor: pointer">
                            username
                          </th>
                          <th colspan="1" role="columnheader" class="">
                            mobileNumber
                          </th>
                          <th colspan="1" role="columnheader" title="Toggle SortBy" class="sortable"
                            style="cursor: pointer">
                            status
                          </th>
                          <th colspan="1" role="columnheader" class="">
                            date
                          </th>
                        </tr>
                      </thead>
                      <tbody role="rowgroup">

                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "userdb";
                        // Create connection
                        $connection = new mysqli($servername, $username, $password, $database);

                        $fetching_user = $connection->prepare("SELECT * FROM userinfo ");
                        // $fetching_user->bind_param('s', $id); 
                        $fetching_user->execute();
                        
                        $fetching_user->bind_result($id, $username, $mobileNumber, $status, $date);
                        
                        $result = $fetching_user->get_result();

                        while ($row = $result->fetch_assoc()) {
                          echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['username']}</td>
                          <td>{$row['mobileNumber']}</td>
                          <td>{$row['status']}</td>
                          <td>{$row['date']}</td>
                          </tr>";
                        }
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <?php
          include './footer.php'
            ?>
        </footer>
      </div>
    </div>
  </div>

  <script type="text/javascript">
$(document).ready(function() {
$('#usersTable').DataTable();
});

function toggleHighlight() {
var element = document.getElementById("collapseProfile");
element.classList.toggle("collapse");
}

function toggleBonus() {
var element = document.getElementById("collapseBonus");
element.classList.toggle("collapse");
}

function toggleTeam() {
var element = document.getElementById("collapseTeam");
element.classList.toggle("collapse");
}
  </script>

</body>

</html>