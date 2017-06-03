using UnityEngine;
using System.Collections;

public class playerController : MonoBehaviour
{
    /* MUNDO */
    /* INTERAÇÕES */
    /* --> Escada <-- */
    /* PLAYER */
    /* --> Básico <-- */
    //private Collider2D playerCollider;
    private Rigidbody2D playerRigibody;
    //private Transform playerTransform;
    /* --> Movimentação <-- */
    public float velocidade;
    public float mouseHorizontal = 2.0f;
    public float mouseVertical = 2.0f;
    /* --> Vida <-- */
    public float valueHealth;
    /* --> Damage <-- */
    /* OUTROS */
    CursorLockMode wantedMode;
    /* TESTE */

    void Start()
    {
        SetCursorState(1);
        velocidade = 3;
        playerRigibody = GetComponent<Rigidbody2D>();
        //playerCollider = GetComponent<Collider2D>();
        //playerTransform = GetComponent<Transform>();
        valueHealth = 100;
    }

    void SetCursorState(int numState)
    {
        switch (numState)
        {
            case 0:
            wantedMode = CursorLockMode.None;
            break;
            case 1:
            wantedMode = CursorLockMode.Locked;
            break;
            case 2:
            wantedMode = CursorLockMode.Confined;
            break;
        }

        Cursor.lockState = wantedMode;
        Cursor.visible = (CursorLockMode.Locked != wantedMode);
    }

    // Update is called once per frame
    private void Update()
    {
        Movimentacao();
        Mira();
    }

    private void Movimentacao()
    {
        if (Input.GetAxisRaw("Horizontal") > 0)
        {
            playerRigibody.velocity = new Vector2(velocidade, playerRigibody.velocity.y);

        }

        if (Input.GetAxisRaw("Horizontal") < 0)
        {
            playerRigibody.velocity = new Vector2((velocidade) * -1, playerRigibody.velocity.y);
        }

        if (Input.GetAxisRaw("Vertical") > 0)
        {
            playerRigibody.velocity = new Vector2(playerRigibody.velocity.x, velocidade);
        }

        if (Input.GetAxisRaw("Vertical") < 0)
        {
            playerRigibody.velocity = new Vector2(playerRigibody.velocity.x, velocidade * -1);
        }
    }

    public void Mira()
    {
        float h = mouseHorizontal * Input.GetAxis("Mouse X");
        float v = mouseVertical * Input.GetAxis("Mouse Y");
        float diff = h + v;
        transform.Rotate(0, 0, diff);
    }

    //*--------- FUNÇÕES ---------*//
}