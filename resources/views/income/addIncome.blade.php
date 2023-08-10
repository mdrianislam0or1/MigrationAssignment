@extends('dashboard')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Add Income</h3>
                        <div class="card-body">
                            <form method="POST" action="{{url('incomeFrom')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Amount"  class="form-control" name="amount" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Description"  class="form-control" name="description" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="date"  class="form-control" name="date" required>
                                </div>
                                <div class="form-group mb-3">
                                    <select class="form-control" name="category" >
                                        <option disabled >-Select Category--</option>
                                        <option value="DailyIncome">Daily Income</option>
                                        <option value="MonthlyIncome">Monthly Income</option>
                                        <option value="YearlyIncome">Yearly Income</option>
                                    </select>
                                     </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection