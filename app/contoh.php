<!-- contoh -->
public function user(){
        return $this->belongsTo('App\User');
    }

    public function books(){
        return $this->belongsToMany('App\Book')->withPivot('quantity');
    }

    public function getTotalQuantityAttribute(){
        $total_quantity = 0;
        
        foreach($this->books as $book){
            $total_quantity += $book->pivot->quantity;
        }

        return $total_quantity;
    }

    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders(){
        return $this->hasMany('App\Order');
    }

    