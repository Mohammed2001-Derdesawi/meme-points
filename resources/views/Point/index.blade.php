<!DOCTYPE html>
<html lang="ar" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>احسب نقاطك</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- Styles -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

        <div class="container py-3">

        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div style="display: flex;justify-content: end">
                    <img style="width: 20%" src="{{asset('Images/logo.png')}}" alt="منصة ميم التعليمية ">

                </div>

            </div>
            <div class="col-md-6">
              <span class="anchor" id="formLogin"></span>
	<!-- form card login -->
    <div class="card card-outline-secondary">
        <div class="card-header">
          <h3 class="mb-0">احسب نقاطك</h3>
        </div>
        <div class="card-body">
          <form  class="form"  role="form" action="{{route('points.create')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="uname1">المعدل التراكمي</label>
              <div class="row">
                <div class="col-md-6">
                    <input class="form-control" name="average" required type="text" value="{{old('average')}}">
                    <span class="text-danger">{{$errors->first("average")}}</span>
                </div>
                <div class="col-md-2">
                    <input name="average_rate" class="form-check-input" type="radio" value="100"  checked>
                    <label>100</label>


                </div>
                <div class="col-md-2">
                    <input name="average_rate" class="form-check-input" type="radio" value="5" >
                    <label>5</label>

                </div>
                <div class="col-md-2">
                    <input name="average_rate" class="form-check-input" type="radio" value="4"  >
                    <label>4</label>

                </div>
                <span class="text-danger">{{$errors->first("average_rate")}}</span>
              </div>

            </div>
            <div class="form-group">
              <label>درجة اختبار التخصص</label>
                 <input name="specialization_mark" class="form-control" required type="number" value="{{old('specialization_mark')}}">
                 <span class="text-danger">{{$errors->first("specialization_mark")}}</span>
            </div>
            <div class="form-group">
              <label>درجة الإختبار العام </label>
            <input name="general_exam"  class="form-control"  required type="number" value="{{old('general_exam')}}">
            <span class="text-danger">{{$errors->first("general_exam")}}</span>

            </div>
            <div class="form-group">
                <label >تاريخ تخرجك</label>
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control" name="year"  required type="text" value="{{old('year')}}">
                        <span class="text-danger">{{$errors->first("year")}}</span>


                    </div>
                    <div class="col-md-4">
                        <select class="selectpicker form-control" name="month"   required>
                            <option value="" selected>الشهر</option>
                            <option value="1">محرم-01</option>
                            <option value="2">صفر-02</option>
                            <option value="3">ربيع الأول-03</option>
                            <option value="4">ربيع الاخر-04</option>
                            <option value="5">جمادى الأولى-05</option>
                            <option value="6">جمادى الأخرة-06</option>
                            <option value="7">رجب-07</option>
                            <option value="8">شعبان-08</option>
                            <option value="9">رمضان-09</option>
                            <option value="10">شوال-010</option>
                            <option value="11">ذو القعدة-11</option>
                            <option value="12">ذو الحجة-12</option>

                        </select>
                        <span class="text-danger">{{$errors->first("month")}}</span>
                    </div>


                    <div class="col-md-4">
                        <select class="selectpicker form-control" required   name="day">
                            <option value="" selected>اليوم</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>

                        </select>
                        <span class="text-danger">{{$errors->first("day")}}</span>
                    </div>


                </div>
                         </div>

                              <input class="btn btn-success btn-lg float-right" type="submit"  value="احسب"/>
          </form>
        </div><!--/card-block-->
      </div><!-- /form card login -->
    </div>




    </div>
    @if (Session::has('total'))



    <div class="row justify-content-center" style="margin-top: 80px;">
        <div class="col-md-6 ">
            <div class="card card-outline-secondary">
                <div class="card-header">
                  <h3 class="mb-0">تفاصيل النقاط</h3>
                </div>
                <div class="card-body">
                    <div class="row" style="display: flex;justify-content:space-between">
                        <div class="col-md-6">
                            <p>درجة الأقدمية</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{Session::get('seniority')}}</p>
                        </div>
                    </div>
                    <div  style="border-bottom: 1px solid rgba(0,0,0,.125) !important; margin:5px 0;" ></div>

                    <div class="row" style="display: flex;justify-content:space-between;">
                        <div class="col-md-6">
                            <p>درجة المعدل </p>
                        </div>
                        <div class="col-md-6">
                            <p>{{Session::get('average')}}</p>

                        </div>
                    </div>
                    <div  style="border-bottom: 1px solid rgba(0,0,0,.125) !important; margin:5px 0;" ></div>

                    <div class="row" style="display: flex;justify-content:space-between">
                        <div class="col-md-6">
                            <p>درجة التخصص</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{Session::get('specialization_mark')}}</p>


                        </div>
                    </div>
                    <div  style="border-bottom: 1px solid rgba(0,0,0,.125) !important; margin:5px 0;" ></div>

                    <div class="row" style="display: flex;justify-content:space-between">
                        <div class="col-md-6">
                            <p>درجة الإختبار العام</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{Session::get('general_exam')}}</p>


                        </div>
                    </div>
                    <div  style="border-bottom: 1px solid rgba(0,0,0,.125) !important; margin:5px 0;" ></div>
                    <div class="row" style="display: flex;justify-content:space-between">
                        <div class="col-md-6">
                            <p>مجموع نقاطك</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{Session::get('total')}}</p>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endif
  </div>
  </div>







    </body>
</html>






















