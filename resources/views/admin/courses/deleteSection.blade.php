<div class="modal fade" id="deleteModal{{$section->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xoá?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-footer border-0">
        <form id="form" class="form-inline" action="/admin/courses/{{$course->course_id}}/sections/{{$section->id}}"
          method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal" aria-label="Close">
            Huỷ
          </button>
          <button id="btnSubmit" type="submit" class="btn btn-danger btn-sm ml-2">Xoá</button>
        </form>
      </div>
    </div>
  </div>
</div>