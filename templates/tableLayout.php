<div id="alert-container"></div>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-start align-items-center mx-4 mb-3 flex-wrap gap-2">
    <div class="col-12">
              <?php if (isset($_SESSION['message']) && isset($_SESSION['message_type'])): ?>
                <div id="message"
                  class="alert alert-<?php echo $_SESSION['message_type'] === 'success' ? 'success' : 'danger'; ?> my-0 mt-4">
                  <?php echo htmlspecialchars($_SESSION['message']); ?>
                </div>
              <?php endif; ?>
              <?php unset($_SESSION['message']); ?>
              <?php unset($_SESSION['message_type']); ?>
</div>
  <h3 class="card-title mb-0"><?= $page_title ?></h3>
  <div class="d-flex align-items-center gap-2">
    <?php if ($display_addBtn === true): ?>
      <button   ype="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        <i class="bi bi-plus-circle"></i> Ajouter
      </button>
    <?php endif; ?>
    <div id="alert-area"> </div>

</div>
        <div class="table-responsive p-3">
            <div class="card p-3 rounded shadow">
                <table id="data-table" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <?php foreach ($table_fields as $field): ?>
                            <th><?= htmlspecialchars($field)??'N/C' ?></th>
                            <?php endforeach; ?>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $record): ?>
                        <tr data-id="<?=$record[$primary_key]?>">
                            <?php foreach ($data_keys as $key): ?>
                                <?php if ($key === 'statut' || $key === 'etat_annonce' || $key === 'etat'): ?>
                                <td>
                                    <?php if ($record[$key] == 99): ?>
                                        <span class="badge bg-label-danger">Bloquée</span>
                                    <?php elseif ($record[$key] == 1): ?>
                                        <span class="badge bg-label-success">Validée</span>
                                    <?php elseif ($record[$key] == 0): ?>
                                        <span class="badge bg-label-warning">Inactif</span>
                                    <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td><?= isset($record[$key]) ? htmlspecialchars(mb_strimwidth($record[$key], 0, 50, '...')) : 'N/C' ?></td>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            <td>
                                <form  method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?');">
                                <input type="hidden" name="<?=$primary_key?>" id="<?=$primary_key?>" value="<?=$record[$primary_key]?>">
                                <button  name="<?=$deleteBtn_name?>" type="submit" class="btn btn-sm btn-outline-danger <?= $deleteBtn_selector ?>"
                                    data-id="<?=$record[$primary_key]?>">
                                    <i class="bi bi-trash"></i>
                                </button>
                                </form>
                               
                                <?php if ($displayEditBtn): ?>
                                <button type="submit" name="editBtn" onclick="populateEditModal(<?=$record[$primary_key]?>)" class="btn btn-sm btn-outline-primary me-1 <?= $editBtn_selector ?>"
                                    data-bs-toggle="modal" data-bs-target="#editModal"
                                    data-id="<?=$record[$primary_key]?>">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <?php endif; ?>

                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>

                </table>

                

            </div>
        </div>
    </div>
</div>