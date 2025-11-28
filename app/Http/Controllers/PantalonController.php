<?php

namespace App\Http\Controllers;

use App\Services\PantalonService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Pantalon;

class PantalonController extends Controller
{
    protected PantalonService $service;

    public function __construct(PantalonService $service)
    {
        $this->service = $service;
    }

    public function getall(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->service->getAllPantalon();
    }

    public function getAllByUser($userId): \Illuminate\Database\Eloquent\Collection
    {
        return $this->service->getAllByUser((int)$userId);
    }

    public function create(Request $request): Pantalon
    {
        $data = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'profile_name' => 'required|string|max:100',
            'tour_taille' => 'nullable|numeric|min:0|max:999.99',
            'tour_hanches' => 'nullable|numeric|min:0|max:999.99',
            'tour_cuisse' => 'nullable|numeric|min:0|max:999.99',
            'tour_genou' => 'nullable|numeric|min:0|max:999.99',
            'tour_cheville' => 'nullable|numeric|min:0|max:999.99',
            'longueur_entrejambes' => 'nullable|numeric|min:0|max:999.99',
            'longueur_totale' => 'nullable|numeric|min:0|max:999.99',
            'coupe' => 'required|in:slim,regular,loose',
            'revers' => 'required|in:oui,non',
            'type_ceinture' => 'required|in:classique,elastique',
        ]);
        return $this->service->create($data);
    }

    public function getById($id): Pantalon
    {
        return $this->service->getById($id);

    }

    public function update(Request $request, $id): bool
    {

        return $this->service->update($id, $request->all());
    }
    public function delete($id): Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $result = $this->service->delete($id);

        if ($result) {
            return response('Pantalon supprimé avec succès', 200);
        }

        return response('Pantalon non trouvé ou impossible à supprimer', 404);
    }
}
