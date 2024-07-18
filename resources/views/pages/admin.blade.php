@extends('admin.admin')

@section('title', 'Administration')

@section('content')

<main>
    <div class="container py-4">
      <div class="row align-items-md-stretch">
        <div class="col-md-4">
          <div class="h-100 p-5 bg-success border rounded-3">
            <h2>100</h2>
            <p>Utilisateurs</p>
          </div>
        </div>
        <div class="col-md-4">
            <div class="h-100 p-5 bg-secondary border rounded-3">
              <h2>54</h2>
              <p>Articles</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="h-100 p-5 bg-info border rounded-3">
              <h2>60</h2>
              <p>Messages</p>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alex</td>
                <td>apachecordovax@gmail.com</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Alex</td>
                <td>apachecordovax@gmail.com</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Alex</td>
                <td>apachecordovax@gmail.com</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Alex</td>
                <td>apachecordovax@gmail.com</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</main>
@endsection
