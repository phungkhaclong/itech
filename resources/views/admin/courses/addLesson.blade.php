<div class="modal fade" id="modalAddLesson{{$section->id}}" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm bài học</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form" action="/admin/courses/{{$course->course_id}}/sections/{{$section->id}}" method="POST">
          @csrf
          <input type="hidden" name="section_id" value={{ $section->id }}>
          <div class="form-group">
            <label for="name" class="col-form-label">Tên bài học:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="url" class="col-form-label">URL:</label>
            <input type="text" class="form-control" id="url" name="url">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Huỷ</button>
            <button id="btnSubmit" type="submit" class="btn btn-sm btn-success">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>