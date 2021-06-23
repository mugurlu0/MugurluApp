@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
	<!--Main Col-->
    <div></div>
	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
	

		<div class="p-4 md:p-12 text-center lg:text-left">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>
			<form action="/profile/{$id}" method="post">
				@csrf
				@method('put')
				<input type="hidden" name="id" value="{{ $user->id}}">
			<h1 class="text-3xl font-bold pt-8 lg:pt-0"><input width="100%" type="text" value="{{$user->name}}"></h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-blue-500 opacity-25"></div>
			<p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">🏚 <input type="text" name="address"  placeholder="Your address"></p>
			<p class="pt-8 text-sm">
				<img width="22px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/langfr-190px-Gmail_icon_%282020%29.svg.png" alt="">
				<input  class="" type="email" name="email" value="{{$user->email}}" id="">
			</p>
			<svg  width="22px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			width="70.07px" height="70.07px" viewBox="0 0 70.07 70.07" style="enable-background:new 0 0 70.07 70.07;" xml:space="preserve"
		   >
	   <g>
		   <g>
			   <path d="M65.094,32.195h-6.982h-0.934c-2.064,0-3.738,1.674-3.738,3.745v0.406c0,2.073,1.674,3.748,3.741,3.748h6.989h0.924
				   c2.068,0,3.747-1.682,3.747-3.748l-0.004-0.411C68.841,33.869,67.162,32.195,65.094,32.195z"/>
			   <path d="M65.098,22.852h-1.649V4.734c0-2.604-2.13-4.734-4.735-4.734H27.475c-2.604,0-4.734,2.131-4.734,4.734v12.999
				   c-6.301,3.562-12.8,7.283-12.814,7.292C6.399,26.477,1.23,31.162,1.23,42.225c0,0.988,0.065,1.9,0.156,2.781
				   c0.029,0.258,0.061,0.506,0.096,0.755c0.091,0.647,0.205,1.266,0.341,1.854c0.049,0.21,0.087,0.429,0.14,0.63
				   c0.183,0.68,0.395,1.318,0.633,1.925c0.12,0.301,0.25,0.575,0.381,0.857c0.14,0.297,0.281,0.589,0.432,0.862
				   c0.175,0.329,0.35,0.646,0.542,0.947c0.046,0.07,0.096,0.134,0.143,0.205c4.556,6.887,12.961,6.918,12.961,6.918h5.686v5.379
				   c0,2.601,2.13,4.731,4.734,4.731h31.238c2.605,0,4.735-2.131,4.735-4.731v-6.561h0.722v-0.004h0.921
				   c2.071,0,3.75-1.675,3.746-3.746l0.004-0.408c-0.004-2.068-1.679-3.738-3.747-3.738H64.17h-6.059h-0.934
				   c-2.068,0-3.738,1.674-3.738,3.741v0.415c0,2.062,1.674,3.743,3.741,3.743h2.974v2.534h-34.12V27.323
				   c1.714-1.087,3.301-2.133,4.206-2.834c4.585-3.546,8.937-6.37,9.526-8.931c0.767-3.323-1.784-6.123-6.209-3.824
				   c-1.394,0.724-4.255,2.311-7.523,4.146V7.502l34.12,0.005V22.85h-2.043v0.004h-0.929c-2.069,0-3.748,1.674-3.748,3.747v0.406
				   c0,2.072,1.679,3.742,3.743,3.742h0.929h6.059h0.931c2.066,0,3.741-1.674,3.741-3.742V26.59
				   C68.841,24.531,67.167,22.852,65.098,22.852z M43.09,62.976c1.312,0,2.37,1.059,2.37,2.368c0,1.312-1.059,2.367-2.37,2.367
				   c-1.307,0-2.363-1.058-2.363-2.367C40.729,64.039,41.788,62.976,43.09,62.976z M48.093,4.558h-9.996
				   c-0.314,0-0.574-0.255-0.574-0.57c0-0.32,0.26-0.575,0.574-0.575h9.996c0.314,0,0.57,0.254,0.57,0.575
				   C48.663,4.302,48.407,4.558,48.093,4.558z"/>
			   <path d="M65.094,41.538H64.17h-6.992c-2.064,0-3.743,1.679-3.743,3.746v0.41c0,2.069,1.675,3.743,3.743,3.743h0.929h6.059h0.926
				   c2.071,0,3.741-1.674,3.746-3.743v-0.41C68.837,43.217,67.167,41.538,65.094,41.538z"/>
		   </g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   </svg>
	   <input name="tel"  type="tel" placeholder="Your phone number">
			
			<div class="pt-12 pb-8">
				<button class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">
				  Update my infos
				</button> 
			</form>
			</div>

			<div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
				<a class="link" href="#" data-tippy-content="@facebook_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg></a>
				<a class="link" href="#" data-tippy-content="@twitter_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg></a>
				<a class="link" href="#" data-tippy-content="@github_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg></a>
				<a class="link" href="#" data-tippy-content="@instagram_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
				<a class="link" href="#" data-tippy-content="@youtube_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-700" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>YouTube</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg></a>
			</div>
			
			<!-- Use https://simpleicons.org/ to find the svg for your preferred product --> 

		</div>

	</div>
	
	<!--Img Col-->
	<div class="w-full lg:w-2/5">
		<!-- Big profile image for side bar (desktop) -->
        <svg style="width:100%" id="457bf273-24a3-4fd8-a857-e9b918267d6a" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="698" height="698" viewBox="0 0 698 698"><defs><linearGradient id="b247946c-c62f-4d08-994a-4c3d64e1e98f" x1="349" y1="698" x2="349" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"/><stop offset="0.54" stop-color="gray" stop-opacity="0.12"/><stop offset="1" stop-color="gray" stop-opacity="0.1"/></linearGradient></defs><title>profile pic</title><g opacity="0.5"><circle cx="349" cy="349" r="349" fill="url(#b247946c-c62f-4d08-994a-4c3d64e1e98f)"/></g><circle cx="349.68" cy="346.77" r="341.64" fill="#f5f5f5"/><path d="M601,790.76a340,340,0,0,0,187.79-56.2c-12.59-68.8-60.5-72.72-60.5-72.72H464.09s-45.21,3.71-59.33,67A340.07,340.07,0,0,0,601,790.76Z" transform="translate(-251 -101)" fill="#6c63ff"/><circle cx="346.37" cy="339.57" r="164.9" fill="#333"/><path d="M293.15,476.92H398.81a0,0,0,0,1,0,0v84.53A52.83,52.83,0,0,1,346,614.28h0a52.83,52.83,0,0,1-52.83-52.83V476.92a0,0,0,0,1,0,0Z" opacity="0.1"/><path d="M296.5,473h99a3.35,3.35,0,0,1,3.35,3.35v81.18A52.83,52.83,0,0,1,346,610.37h0a52.83,52.83,0,0,1-52.83-52.83V476.35A3.35,3.35,0,0,1,296.5,473Z" fill="#fdb797"/><path d="M544.34,617.82a152.07,152.07,0,0,0,105.66.29v-13H544.34Z" transform="translate(-251 -101)" opacity="0.1"/><circle cx="346.37" cy="372.44" r="151.45" fill="#fdb797"/><path d="M489.49,335.68S553.32,465.24,733.37,390l-41.92-65.73-74.31-26.67Z" transform="translate(-251 -101)" opacity="0.1"/><path d="M489.49,333.78s63.83,129.56,243.88,54.3l-41.92-65.73-74.31-26.67Z" transform="translate(-251 -101)" fill="#333"/><path d="M488.93,325a87.49,87.49,0,0,1,21.69-35.27c29.79-29.45,78.63-35.66,103.68-69.24,6,9.32,1.36,23.65-9,27.65,24-.16,51.81-2.26,65.38-22a44.89,44.89,0,0,1-7.57,47.4c21.27,1,44,15.4,45.34,36.65.92,14.16-8,27.56-19.59,35.68s-25.71,11.85-39.56,14.9C608.86,369.7,462.54,407.07,488.93,325Z" transform="translate(-251 -101)" fill="#333"/><ellipse cx="194.86" cy="372.3" rx="14.09" ry="26.42" fill="#fdb797"/><ellipse cx="497.8" cy="372.3" rx="14.09" ry="26.42" fill="#fdb797"/></svg>
		<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
		
	</div>
	
	
	<!-- Pin to top right corner -->
	  <div class="absolute top-0 right-0 h-12 w-18 p-4">
		<button class="js-change-theme focus:outline-none">🌙</button>
	  </div>

</div>



	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.link',{
		  placement: 'bottom'
		})

		//Toggle mode
		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');
		
		
		toggle.addEventListener('click', () => {

		  if (body.classList.contains('text-gray-900')) {
			toggle.innerHTML = "☀️";
			body.classList.remove('text-gray-900');
			body.classList.add('text-gray-100');
			profile.classList.remove('bg-white');
			profile.classList.add('bg-gray-900');
		  } else
		  {
			toggle.innerHTML = "🌙";
			body.classList.remove('text-gray-100');
			body.classList.add('text-gray-900');
			profile.classList.remove('bg-gray-900');			
			profile.classList.add('bg-white');
			
		  }
		});
		
    </script>
@endsection