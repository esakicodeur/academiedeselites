@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Nos informations</h3>

            <table class="table table-striped">
                <thead>
                    <th>

                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-map-marker-alt"></i></td>
                        <td><h6>Adresse :</h6></td>
                        <td>Cité des palmiers-Carrefour Express, Douala</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-phone"></td>
                        <td><h6>Téléphone :</h6></td>
                        <td>695 478 293 / 694 212 383</td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-whatsapp"></i></td>
                        <td><h6>Wathsapp :</h6></td>
                        <td>698 110 561</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-envelope"></i></td>
                        <td><h6>Email :</h6></td>
                        <td>academiedeselites237@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h3>Entrer en contact avec nous</h3>
            <p class="text-muted">Si vous rencontrez des problèmes avec ce service, s'il vous plait <a href="mailto:academiedeselites237@gmail.com">veuillez
                demander de l'aide</a></p>

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <p>
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Votre nom..." >
                    {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
                </p>

                <p>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Votre adresse email..." >
                    {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                </p>

                <p>
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="tel" name="phone" id="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="Votre numéro de téléphone..." >
                    {!! $errors->first('phone', '<span class="invalid-feedback">:message</span>') !!}
                </p>

                <p>
                    <label for="pays" class="form-label">Pays</label>
                    <input type="text" name="pays" id="pays" class="form-control {{ $errors->has('pays') ? 'is-invalid' : '' }}" value="{{ old('pays') }}" placeholder="Votre pays..." >
                    {!! $errors->first('pays', '<span class="invalid-feedback">:message</span>') !!}
                </p>

                <p>
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" name="ville" id="ville" class="form-control {{ $errors->has('ville') ? 'is-invalid' : '' }}" value="{{ old('ville') }}" placeholder="Votre ville..." >
                    {!! $errors->first('ville', '<span class="invalid-feedback">:message</span>') !!}
                </p>

                <p>
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" placeholder="Votre message..." >{{ old('message') }}</textarea>
                    {!! $errors->first('message', '<span class="invalid-feedback">:message</span>') !!}
                </p>

                <button class="btn btn-primary btn-lg btn-block my-3" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>
@endsection
