@extends('layouts.master')
 @section('title','詳細資料')
 @section('content')
			<a class="navbar-brand" href="/">HelloLaravel</a>
			<ul class="nav navbar-nav">
				<li>
					<a href="#">排行榜</a>
				</li>
			</ul>
		</div>
	</nav>
	<div style="padding-top: 70px;"></div>
	<div class="container">
		<div class="page-header">
			<h1>詳細資料</h1>
		</div>
		<div class="row">
			<p>
				信箱：{{$student->user->email}}
			</p>
			<p>
				學號：{{$student->no}}
			</p>
			<p>
				姓名：{{$student->user->name}}
			</p>
			<p>
				電話：{{$student->tel}}
			</p>
			@if ( is_null($subject) || $subject=='chinese' )
			<p>
				國文：{{$student->score->chinese}}
			</p>
			@endif
			@if ( is_null($subject) || $subject=='english' )
			<p>
				英文：{{$student->score->english}}
			</p>
			@endif
			@if ( is_null($subject) || $subject=='math' )
			<p>
				數學：{{$student->score->math}}
			</p>
			@endif
		</div>
	</div>
</body>
</html>  