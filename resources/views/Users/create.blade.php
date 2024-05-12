<x-layout-auth title="Novo usuário">
  <form action="{{ route('users.store') }}" method="POST" class="w-25 border border-white rounded p-3 m-auto">
    @csrf
    <div class="mb-3">
      <label for="name" class="text-white mb-2">Nome</label>
      <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control form-control-lg bg-transparent text-white" required>
    </div>
    <div class="mb-3">
      <label for="email" class="text-white mb-2">Email</label>
      <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control form-control-lg bg-transparent text-white" required>
    </div>
    <div class="mb-3">
      <label for="password" class="text-white mb-2">Senha</label>
      <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control form-control-lg bg-transparent text-white" required>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-success w-100" type="submit">Registrar</button>
    </div>
  </form>
</x-layout-auth>