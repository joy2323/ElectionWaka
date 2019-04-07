@extends('admin.layout.master')
@section('title', 'Election || Add Answers')
@section('content')

<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Add Answers</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
					
						<li><a href="{{url('admin/index')}}">Dashboard</a></li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i>Answer Submission Form</h3>
						</div>
                        <div class="content with-padding padding-bottom-10">
                            <h2>{{$question->question}}</h2>
                        </div>
						<div class="content with-padding padding-bottom-10">	

                        		<h3> All Answers</h3>
									@foreach($question->answer as $answer)<br/>
											{{$answer->answer}}
										<div class = "col-xl-4">
											<strong>Answered by</strong> <br/>{{$answer->candidate->name}}
										</div>
																			
									@endforeach
							
						</div>
                            <div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-8">
								<form action = "{{route('question.answer')}}" method = "POST">
								<input type="hidden" name="question_id" value="{{$question->id}}">
									@csrf
									<div class="submit-field">
										<h5> Answer</h5>
										<textarea class="with-border" name="answer" rows="10" col="80"  width="100px"></textarea>
										<!-- <input type="text" class="with-border" name="answer"> -->
									</div>
									<div class="submit-field">
										<h5> Candidate</h5>
										<input type="text" class="with-border" name="candidate_id" placeholder="Fela Durotoye">
									</div>
									<div class="col-xl-12">
									<input type="Submit" value="Post an Answer" role = "button">
									</div>
								</form>
								</div>

							</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection