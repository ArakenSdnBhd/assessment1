<html>
    <head>
        <title>Assesment | Admin page</title>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"><h3>Admin page</h3></div>
                <div class="col-sm-3"></div>
            </div>
            <div class="">
                <form>
                    <div class="form-group">
                      <label for="comment">Question:</label>
                      <textarea class="form-control" rows="5" id="question" placeholder="Insert you question here..."></textarea>
                    </div>
                    <p>Insert the ansewr here and click the answer</p>
                    <div>
                        <div class="radio">
                          <label>
                              <input type="radio" value="A" name="answer">A
                              <input name="answerA" type="text" class="form-control">    
                        </label>
                        </div>
                        <div class="radio">
                          <label>
                              <input type="radio" value="B" name="answer">B
                              <input name="answerA" type="text" class="form-control">    
                        </label>
                        </div>
                        <div class="radio">
                          <label>
                              <input type="radio" value="C">C
                              <input name="answerA" type="text" class="form-control">    
                        </label>
                        </div>
                        <div class="radio">
                          <label>
                              <input type="radio" value="D" name="answer">D
                              <input name="answerD" type="text" class="form-control">    
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 col-md-3"></div>
                        <div class="col-sm-12 col-lg-3 col-md-3"><a href="" class="btn btn-success">Save</a></div>
                        <div class="col-sm-12 col-lg-3 col-md-3"></div>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Questions</td>
                            <td colspan="2">Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Question 1</td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Question 2</td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Question 3</td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Question 4</td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
            
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>