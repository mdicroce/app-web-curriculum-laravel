        @csrf
        <div class="form-group">
            <label for="title">Project title</label>
                <input class="form-control border-0 bg-light shadow-sm"
                 type="text" id="title" name="title" value="{{old('title',$project->title)}}">
            

        </div>
        <div class="form-group">
            <label for="description">Project description</label>
                
                <textarea name="description" id="description" class="form-control border-0 bg-light shadow-sm">{{old('description',$project->description)}}</textarea>

        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit"> {{$btnText}} </button>