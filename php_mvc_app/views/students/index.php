<h3 class="mb-4">Estudiantes</h3>

<div class="table-responsive">
    <table id="studentTable" class="table table-bordered table-dark table-striped text-center" style="min-width: 900px;">
        <thead>
            <tr>
                <th class="px-3">ID</th>
                <th class="px-3">Nombre</th>
                <th class="px-3">Apellido</th>
                <th class="px-3">Carrera</th>
                <th class="px-3">Sexo</th>
                <th class="px-3">Fecha de Nacimiento</th>
                <th class="px-3">País</th>
                <th class="px-3">Distrito</th>
                <th class="px-3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr data-id="<?= $student['id'] ?>">
                    <td class="align-middle"><?= $student['id'] ?></td>

                    <td class="align-middle" contenteditable="true" data-column="name">
                        <?= $student['name'] ?>
                    </td>

                    <td class="align-middle" contenteditable="true" data-column="lastname">
                        <?= $student['lastname'] ?>
                    </td>

                    <td class="align-middle">
                        <select class="form-select form-select-sm carrer-select" data-column="carrer_id">
                            <?php foreach ($carrers as $carrer): ?>
                                <option value="<?= $carrer['id'] ?>" <?= $student['carrer_id'] == $carrer['id'] ? 'selected' : '' ?>>
                                    <?= $carrer['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </td>

                    <td class="align-middle">
                        <select class="form-select form-select-sm sex-select" data-column="sex">
                            <option value="M" <?= $student['sex'] === 'M' ? 'selected' : '' ?>>M</option>
                            <option value="F" <?= $student['sex'] === 'F' ? 'selected' : '' ?>>F</option>
                        </select>
                    </td>

                    <td class="align-middle">
                        <input type="date" class="form-control form-control-sm born-date" data-column="date_born" value="<?= $student['date_born'] ?>">
                    </td>

                    <td class="align-middle">
                        <select class="form-select form-select-sm country-select" data-column="country_id">
                            <?php foreach ($countries as $country): ?>
                                <option value="<?= $country['id'] ?>" <?= $student['country_id'] == $country['id'] ? 'selected' : '' ?>>
                                    <?= $country['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </td>

                    <td class="align-middle">
                        <select class="form-select form-select-sm district-select" data-column="district_id">
                            <?php foreach ($districts as $district): ?>
                                <option value="<?= $district['id'] ?>" <?= $student['district_id'] == $district['id'] ? 'selected' : '' ?>>
                                    <?= $district['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </td>

                    <td class="align-middle">
                        <button class="btn btn-danger btn-sm delete-student-btn">Eliminar</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Botón para agregar un nuevo estudiante -->
<button class="btn btn-success mt-3" id="addStudent">Nuevo</button>
