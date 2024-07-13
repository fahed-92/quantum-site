@if(isset($row))
<!-- Modal -->
<div class="modal fade" id="request{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="request{{ $row->id }}Label"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="request{{ $row->id }}Label">{{ $row->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="requestForm" action="{{ route('request.send') }}" method="POST">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $row->id }}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="full_name" class="form-label">الأسم بالكامل</label>
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" />
                            @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" />
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">العنوان</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" />
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="message" class="form-label">رسالة</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="7"></textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="requestForm" class="btn btn-primary">ارسال الطلب</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
@endif

@push('scripts')
@if($errors->any())
<script type="text/javascript">
    alert({{ implode(' ', $errors->all()) }});
</script>
@endif
@endpush
