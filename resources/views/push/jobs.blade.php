@extends('layout.layout')

@section('title', 'Users List')

@section('content')


    <form class="form-horizontal col-sm-6 col-sm-offset-2">

        {!! csrf_field() !!}

        <div class="form-group">
            <label for="targetSelect" class="col-sm-4 control-label">Target</label>

            <div class="col-sm-8">
                <select id="selectTarget" class="form-control" name="target">
                    <option value="0" selected="selected">All</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="typeSelect" class="col-sm-4 control-label">Type</label>

            <div class="col-sm-8">
                <select id="selectType" class="form-control" name="type">
                    <option value="s" selected="selected">System Message</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputDisplayTitle" class="col-sm-4 control-label">Display Title</label>

            <div class="col-sm-8">
                <input type="text" id="inputDisplayTitle" name="displayTitle"
                       class="form-control" placeholder="Please input the display title"/>
            </div>
        </div>

        <div class="form-group">
            <label for="inputDisplayText" class="col-sm-4 control-label">Display Text</label>

            <div class="col-sm-8">
                <input type="text" id="inputDisplayText" name="displayText"
                       class="form-control" placeholder="Please input the display text" required/>
            </div>
        </div>

        <div class="form-group">
            <label for="actionSelect" class="col-sm-4 control-label">Action</label>

            <div class="col-sm-8">
                <select id="selectAction" class="form-control" name="action">
                    <option value="u" selected="selected">User</option>
                    <option value="s">Story</option>
                    <option value="ss">Self Story</option>
                    <option value="p">Post</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputActionInfo" class="col-sm-4 control-label">Action Info</label>

            <div class="col-sm-8">
                <input type="text" id="inputActionInfo" name="actionInfo"
                       class="form-control" placeholder="Please input the user id" required>
            </div>
        </div>

        <button type="submit" id="btnSubmit"
                class="btn btn-primary pull-right">Submit
        </button>
    </form>

@endsection

@section('js')
    <script type="text/javascript">
        $(function () {

            $('#selectAction').change(function () {
                var actionSelectValue = $(this).val();
                var inputActionInfo = $('#inputActionInfo');

                if (actionSelectValue == 'u') {
                    inputActionInfo.attr('placeholder', 'Please input the user id');
                } else if (actionSelectValue == 's') {
                    inputActionInfo.attr('placeholder', 'Please input the story id');
                } else if (actionSelectValue == 'ss') {
                    inputActionInfo.attr('placeholder', 'Please input the self story id');
                } else if (actionSelectValue == 'p') {
                    inputActionInfo.attr('placeholder', 'Please input the post id');
                }
            });

            $('form').submit(function (e) {
                e.preventDefault();

                var btnSubmit = $('#btnSubmit');
                btnSubmit.attr('disabled', true);
                btnSubmit.text('Submitting...');


                var target = $('#selectTarget').val();
                var type = $('#selectType').val();
                var displayTitle = $('#inputDisplayTitle').val();
                var displayText = $('#inputDisplayText').val();
                var action = $('#selectAction').val();
                var actionInfo = $('#inputActionInfo').val();

                var data = {
                    target: target,
                    type: type,
                    displayTitle: displayTitle,
                    displayText: displayText,
                    action: action,
                    actionInfo: actionInfo
                };

                $.ajax('{{ route('push.jobs.store') }}', {
                    type: 'POST',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function (data, status, xhr) {
                        new PNotify({
                            title: 'Success',
                            text: 'Send push finished',
                            type: 'success',
                            delay: 5000
                        });
                    },
                    error: function (xhr, status, error) {
                        new PNotify({
                            title: 'Error',
                            text: 'Error occurs when send push, please try again later.',
                            type: 'error',
                            delay: 5000
                        });
                    },
                    complete: function () {
                        btnSubmit.text('Submit');
                        btnSubmit.attr('disabled', false);
                    }
                });
            });
        });
    </script>
@endsection

