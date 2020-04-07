<div class="modal fade" id="modaladdSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm môn học</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form" action="/admin/classes/{{$class->class_id}}" method="POST">
          @csrf
          <input type="hidden" value="{{$class->class_id}}" name="class_id">
          <select class="form-control" name="subject_id">
            @foreach ($subjectList as $subject)
            <option value="{{$subject->subject_id}}">
              {{ $subject->subject_id}} - {{ $subject->name }}
            </option>
            @endforeach
          </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Huỷ</button>
        <button id="btnSubmit" type="submit" class="btn btn-sm btn-success">Thêm</button>
      </div>
    </div>
  </div>
</div>