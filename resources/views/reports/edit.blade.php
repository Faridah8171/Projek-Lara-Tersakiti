<h3>Edit Report Form</h3>
<form action="/reports/{{$report->id}}" method="POST">
    @csrf
    @method('put')
    Title : <input type="text" name="title" value="{{$report->title}}"><br>
    Description : <textarea name="description">{{$report->description}}</textarea><br>
    Priority : <select name="priority" value="{{$report->priority}}">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option> </select><br>
        <input type="submit" value="Update">
        <input type="reset" value="Cancel"><br>
</form>