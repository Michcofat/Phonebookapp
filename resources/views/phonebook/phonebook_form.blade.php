
@if($errors->any())
         <div class='alert alert-danger'>
            <ul>
                 @foreach($errors->all() as $error)
                  <li>{{$error }}</li>
                @endforeach
           </ul> 
      </div>
       @endif
       @csrf    {{-- CSRF token for form security --}}
       <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control"name="name" id="name"
                @if(isset($phonebook))
                value="{{ $phonebook->name}}"
                @else
                value='{{ old ('name')}}'
                @endif
                >
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control"name="email" id="email"
                @if(isset($phonebook))
                value="{{ $phonebook->email}}"
                @else
                value='{{ old ('email')}}'
                @endif
                >
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control"name="phone" id="phone"
                @if(isset($phonebook))
                value="{{ $phonebook->phone}}"
                @else
                value='{{ old ('phone')}}'
                @endif
               >
            </div>

           