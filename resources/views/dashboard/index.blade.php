@extends('layouts.dashboard')

@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="h3 mb-4 page-title">Profile</h2>
          <div class="card">
            <div class="row  mt-5 align-items-center">
              <div class="col-md-3 text-center mb-5">
                <div class="avatar avatar-xl">
                  <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
              </div>
              <div class="col">
                <div class="row align-items-center">
                  <div class="col-md-7">
                    <h4 class="mb-1">{{ $user->name ?? 'Name Not Added' }}</h4>
                    <p class="small mb-3"><span class="badge badge-dark">{{ $user->designation ?? 'designation Not Added'}}</span></p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-7">
                    <p class="text-muted">{{ $user->about ?? 'about Not Added'}} </p>
                  </div>
                  <div class="col">
                    <p class="small mb-0 text-muted">{{ $user->address ?? 'address Not Added'}} </p>
                    <p class="small mb-0 text-muted">{{ $user->phone ?? 'address Not phone'}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-12">
              <div class="d-flex align-items-center mx-3 mb-3">
                <div class="flex-fill">
                  <h3 class="h4 pt-5">Social Links</h3>
                </div>
              </div>
              <table class="table table-striped table-borderless mb-4">
                <thead class="thead-white d-none">
                  <tr>
                    <th>Social</th>
                    <th>Links</th>
                  </tr>
                </thead>
                <tbody>
                  
                  {{-- skype --}}
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fab fa-skype fe-24"></span><br> Skype </td>
                    <td scope="row" class="w-75"> {{ $user->skype ?? 'skype Link not Added' }}<br>
                      <small class="text-muted">skype Profile link</small>
                    </td>
                  </tr>
                  
                  {{-- facebook --}}
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fab fa-facebook fe-24"></span><br> facebook </td>
                    <td scope="row" class="w-75"> {{ $user->facebook ?? 'facebook Link not Added' }}<br>
                      <small class="text-muted">facebook Profile link</small>
                    </td>
                  </tr>
                  
                  {{-- linkedin --}}
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fab fa-linkedin fe-24"></span><br> linkedin </td>
                    <td scope="row" class="w-75"> {{ $user->skype ?? 'linkedin Link not Added' }}<br>
                      <small class="text-muted">linkedin Profile link</small>
                    </td>
                  </tr>
                  
                  {{-- twitter --}}
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fab fa-twitter fe-24"></span><br> twitter </td>
                    <td scope="row" class="w-75"> {{ $user->twitter ?? 'twitter Link not Added' }}<br>
                      <small class="text-muted">twitter Profile link</small>
                    </td>
                  </tr>
                  
                  {{-- instagram --}}
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fab fa-instagram fe-24"></span><br> instagram </td>
                    <td scope="row" class="w-75"> {{ $user->instagram ?? 'instagram Link not Added' }}<br>
                      <small class="text-muted">instagram Profile link</small>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>
          </div>

        </div> <!-- /.col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </main> 

@endsection