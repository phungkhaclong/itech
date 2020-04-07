<div class="modal fade" id="modalAddSection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form" action="/admin/courses/{{$course->course_id}}" method="POST">
          @csrf
          <input type="hidden" name="course_id" value={{ $course->course_id }}>
          <div class="form-group">
            <label for="section_name" class="col-form-label">Tên danh mục:</label>
            <input type="text" class="form-control" id="section_name" name="section_name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Huỷ</button>
        <button id="btnSubmit" type="submit" class="btn btn-sm btn-success">Thêm</button>
      </div>
    </div>
  </div>
</div>