

<meta name="csrf-token" content="{{ csrf_token() }}">
 <div class="modal fade" id="AddModal"  >
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header themeColored">
                          <h4 class="modal-title" style="color:white">Add Challenge:</h4>
                          <button type="button"  class="close" onclick="reloadPage()" data-dismiss="modal">
                            <span style="color:white">&times;</span>
                          </button>
                        </div>
                        {{-- action="{{route('challenges.store')}}" method="POST" --}}
                        <div class="modal-body row">
                          <form class="col" action="{{ route('challenges.store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                            <div class="form-group">
                              <label for="title" class="form-control-label">title</label>
                              <input type="text" class="form-control" name="title" id="title" placeholder="Challenge Title">
                            </div>
                            <div class="form-group">
                              <label for="description" class="form-control-label">description</label>
                              <textarea class="form-control" name="description" id="description" placeholder="Challenge Description"></textarea>
                            </div>
                              <label for="status" class="form-control-label">Status</label>
                              <select  name ="status" id="status" placeholder="Challenge Status" class="form-control">
                                <option>ongoing</option>
                                <option>closed</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="startDate" class="form-control-label">Start Date</label>
                              <input type="date" class="form-control" name="startDate" id="startDate" placeholder="Challenge Start Date">
                            </div>
                            <div class="form-group">
                              <label for="finishDate" class="form-control-label">Finish Date</label>
                              <input type="date" class="form-control" name="finishDate" id="finishDate" placeholder="Challenge Finish Date">
                            </div>
                            <button type="submit" class="btn btn-secondary pull-right btnThemed">Save Challenge</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>





                <div class="modal fade" id="EditModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Challenge :</h4>
                          <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                          </button>
                        </div>
                        {{-- action="{{route('challenges.store')}}" method="POST" --}}
                        <div class="modal-body row">
                          <form id="editform" class="col" action="{{ route('updateCh')}}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" id="id" >
                                  </div>
                            <div class="form-group">
                              <label for="title" class="form-control-label">title</label>
                              <input type="text" class="form-control" name="title" id="title" placeholder="Challenge Title">
                            </div>
                            <div class="form-group">
                              <label for="description" class="form-control-label">description</label>
                              <textarea class="form-control" name="description" id="description" placeholder="Challenge Description"></textarea>
                            </div>
                              <label for="status" class="form-control-label">Status</label>
                              <select  name ="status" id="status" placeholder="Challenge Status" class="form-control">
                                <option>ongoing</option>
                                <option>closed</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="startDate" class="form-control-label">Start Date</label>
                              <input type="date" class="form-control" name="startDate" id="startDate" placeholder="Challenge Start Date">
                            </div>
                            <div class="form-group">
                              <label for="finishDate" class="form-control-label">Finish Date</label>
                              <input type="date" class="form-control" name="finishDate" id="finishDate" placeholder="Challenge Finish Date">
                            </div>
                            <button type="submit" class="btn btn-secondary btnThemed pull-right">Edit Challenge</button>
                          </form>
                        </div>
                      </div>
                    </div>
                <script>
                    function reloadPage() {
                        location.reload(true);
                        window.location.href = '/challenges';
                    }

    function edit(id) {
            $challenge_id  = id;
            var oFormObject =document.forms['editform'];
        $.get('challenges/'+$challenge_id+'/edit', function (data) {
          $('#EditModal').modal('show');
          console.log(data.title);
          oFormObject.elements['id'].value=data.id_challenge;
          oFormObject.elements['title'].value=data.title;
          oFormObject.elements['status'].value=data.status;
          oFormObject.elements['description'].value=data.description;
          oFormObject.elements['startDate'].value=data.startDate;
          oFormObject.elements['finishDate'].value=data.finishDate;
        })
     }
                    </script>
