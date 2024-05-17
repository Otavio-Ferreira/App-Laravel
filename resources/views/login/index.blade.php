<x-layout-auth title="Login">
  <form action="{{ route('sigin') }}" method="POST" class="border border-white rounded p-3 m-auto">
    @csrf
    <div class="mb-3">
      <label for="email" class="text-white mb-2">Email</label>
      <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control form-control-lg bg-transparent text-white" required>
    </div>
    <div class="mb-3">
      <label for="password" class="text-white mb-2">Senha</label>
      <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control form-control-lg bg-transparent text-white" required>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-success w-100" type="submit">Entrar</button>
      <a href="{{route('users.create')}}" class="btn btn-outline-primary w-100">Registrar</a>
    </div>
  </form>
</x-layout-auth>