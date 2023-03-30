namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QrcodeController extends Controller
{
    protected Profile $profile;

    public function __construct()
    {
        $this->profile = new Profile();
    }

    public function scanQrcode(): View|RedirectResponse
    {
        $profile = $this->profile->getProfile();
        if (is_null($profile)) {
            return redirect('/');
        }
        return view('/scanqrcode', compact('profile'));
    }
}
