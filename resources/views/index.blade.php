
<html>
    <head>
        <title>Laravel</title>

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
      <link href="/assets/styles/kendo.common.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/kendo.dataviz.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/kendo.flat.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/kendo.dataviz.flat.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/kendo.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.js"> </script>
  
  <script src="assets/js/form.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
            
    </head>
    <body>
	
        <div class="container">
            <div class="content">
				<h2>Form Sign Up Visitors</h2>
                <form class="form-horizontal" method="post" action="../15todo/CreateVisitors">
					{{ csrf_field() }} 
					<div class="form-group">
						<label for="name" class="col-lg-2 control-label"> Name </label>
						{!! Form::text('name','',array('required' => 'required', 'id' => 'name')) !!}
					</div>
					
					<div class="form-group">
						<label for="email" class="col-lg-2 control-label"> Email </label>
						{!! Form::text('email','',array('required' => 'required', 'id' => 'email')) !!}
        
					</div>
					
					<div class="form-group">
						<label for="phone" class="col-lg-2 control-label"> Phone </label>
						{!! Form::text('phone','',array('required' => 'required', 'id' => 'phone')) !!}
        
					</div>
					
					<div class="form-group">
						<label for="occupation" class="col-lg-2 control-label"> Occupation </label>
						{!! Form::text('occupation','',array('required' => 'required', 'id' => 'occupation')) !!}
        
					</div>

					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Create</button>

					</div>
					</div>
					
					</form>
            </div>
        </div>
    </body>
</html>
