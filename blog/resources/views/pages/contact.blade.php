@extends('main')

@section('title','| Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form>
                    <div class="from-group">
                        <label name="email">Email:</label><br>
                        <input  id="email" name="email" class="from-control">
                    </div>
                    <hr>
                    <div class="from-group">
                        <label name="subject">Subject:</label><br>
                        <input  id="subject" name="subject" class="from-control">
                    </div>
                    <hr>
                    <div class="from-group">
                        <label name="message">Message:</label><br>
                        <textarea id="message" name="message" class="from-control">Type your message here...</textarea>
                    </div>
                    <br>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection

@section('s')
    <script type="text/javascript">
      comfirm('I get it');
    </script>
@endsection
